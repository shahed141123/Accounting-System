<?php

namespace App\Http\Controllers\Frontend;

use Stripe;
use App\Models\Order;
use Illuminate\Http\Request;
use Stripe\Exception\ApiException;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class StripeController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePayment($id)
    {
        $data = [
            'order'           => Order::with('orderItems')->where('order_number', $id)->first(),
            'user'            => Auth::user(),
        ];
        // dd(Cart::instance('cart'));
        return view('frontend.pages.cart.stripe', $data);
    }
    public function stripePost(Request $request): RedirectResponse
    {
        // Validate request

        try {
            // Set Stripe API key
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            // Create a charge
            Stripe\Charge::create([
                'amount' => $request->amount * 100, // Amount in cents
                'currency' => 'eur', // Currency code
                'source' => $request->stripeToken, // Stripe token
                'description' => 'Payment Successful for your Order in Piqpaq'
            ]);

            // Find the order
            $order = Order::with('orderItems')->where('order_number', $request->order_number)->first();

            if ($order) {
                // Update order status
                $order->update([
                    'payment_status' => 'paid',
                ]);

                flash()->success('Payment Successful!');
                return redirect()->route('checkout.success', $request->order_number);
            } else {
                flash()->error('Order not found!');
                return view('frontend.pages.cart.checkoutFailure');
            }
            // } catch (\Stripe\Exception\CardException $e) {
            //     // Handle card errors (e.g., declined card)
            //     $errorMessage = $e->getError()->message;
            //     flash()->error('Payment failed: ' . $errorMessage);
            //     return view('frontend.pages.cart.checkoutFailure');
            // } catch (\Stripe\Exception\RateLimitException $e) {
            //     // Handle rate limit errors
            //     flash()->error('Payment failed due to rate limit exceeded.');
            //     return view('frontend.pages.cart.checkoutFailure');
            // } catch (\Stripe\Exception\InvalidRequestException $e) {
            //     // Handle invalid requests
            //     flash()->error('Invalid request: ' . $e->getMessage());
            //     return view('frontend.pages.cart.checkoutFailure');
            // } catch (\Stripe\Exception\AuthenticationException $e) {
            //     // Handle authentication errors
            //     flash()->error('Authentication error: ' . $e->getMessage());
            //     return view('frontend.pages.cart.checkoutFailure');
            // } catch (\Stripe\Exception\ApiConnectionException $e) {
            //     // Handle network communication errors
            //     flash()->error('Network communication error: ' . $e->getMessage());
            //     return view('frontend.pages.cart.checkoutFailure');
        } catch (\Exception $e) {
            // Handle general errors
            flash()->error('An unexpected error occurred: ' . $e->getMessage());
            return view('frontend.pages.cart.checkoutFailure');
        }
    }
}
