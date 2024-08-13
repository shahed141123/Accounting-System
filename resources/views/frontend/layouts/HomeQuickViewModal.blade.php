@foreach ($latest_products as $latest_product)
    <div class="modal fade" id="popupQuickview{{$latest_product->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered ps-quickview">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="wrap-modal-slider container-fluid ps-quickview__body">
                        <button class="close ps-quickview__close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="ps-product--detail">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="ps-product--gallery">
                                        <div class="ps-product__thumbnail">
                                            @if ($latest_product->multiImages->isNotEmpty())
                                                @foreach ($latest_product->multiImages->slice(0, 5) as $image)
                                                    @php
                                                        $imagePath = 'storage/' . $image->photo;
                                                        $imageSrc = file_exists(public_path($imagePath)) ? asset($imagePath) : asset('frontend/img/no-product.png');
                                                    @endphp
                                                    <div class="slide">
                                                        <img src="{{ $imageSrc }}" alt="{{ $latest_product->name }}" />
                                                    </div>
                                                @endforeach
                                            @else
                                                @php
                                                    $thumbnailPath = 'storage/' . $latest_product->thumbnail;
                                                    $thumbnailSrc = file_exists(public_path($thumbnailPath)) ? asset($thumbnailPath) : asset('frontend/img/no-product.png');
                                                @endphp
                                                <div class="slide">
                                                    <img src="{{ $thumbnailSrc }}" alt="{{ $latest_product->name }}" />
                                                </div>
                                            @endif
                                        </div>
                                        <div class="ps-gallery--image">
                                            @if ($latest_product->multiImages->isNotEmpty())
                                                @foreach ($latest_product->multiImages->slice(0, 5) as $image)
                                                    @php
                                                        $imagePath = 'storage/' . $image->photo;
                                                        $imageSrc = file_exists(public_path($imagePath)) ? asset($imagePath) : asset('frontend/img/no-product.png');
                                                    @endphp
                                                    <div class="slide">
                                                        <div class="ps-gallery__item">
                                                            <img src="{{ $imageSrc }}" alt="{{ $latest_product->name }}" />
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                @php
                                                    $thumbnailPath = 'storage/' . $latest_product->thumbnail;
                                                    $thumbnailSrc = file_exists(public_path($thumbnailPath)) ? asset($thumbnailPath) : asset('frontend/img/no-product.png');
                                                @endphp
                                                <div class="slide">
                                                    <div class="ps-gallery__item">
                                                        <img src="{{ $thumbnailSrc }}" alt="{{ $latest_product->name }}" />
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="ps-product__info">
                                        <div class="ps-product__badge">
                                            <span class="ps-badge ps-badge--instock">{{ $latest_product->stock > 0 ? 'IN STOCK' : 'OUT OF STOCK' }}</span>
                                        </div>
                                        <div class="ps-product__branch">
                                            <a href="#">{{ $latest_product->brand->name ?? 'Brand Name' }}</a>
                                        </div>
                                        <h5 class="ps-product__title">
                                            <a href="{{ route('product.details', $latest_product->slug) }}">
                                                {{ $latest_product->name }}
                                            </a>
                                        </h5>
                                        <div class="ps-product__desc">
                                            <p>{!! $latest_product->short_description ?? 'No description available' !!}</p>
                                        </div>
                                        <div class="ps-product__meta">
                                            <span class="ps-product__price">${{ $latest_product->unit_price ?? '0.00' }}</span>
                                        </div>
                                        <div class="ps-product__quantity">
                                            <h6>Quantity</h6>
                                            <div class="d-md-flex align-items-center">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="1" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcartV2">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="ps-product__type">
                                            <ul class="ps-product__list">
                                                @if ($latest_product->tags)
                                                    <li>
                                                        <span class="ps-list__title">Tags: </span>
                                                        @foreach (json_decode($latest_product->tags) as $tag)
                                                            <a class="ps-list__text" href="#">{{ $tag }}</a>@if (!$loop->last),@endif
                                                        @endforeach
                                                    </li>
                                                @endif
                                                <li><span class="ps-list__title">SKU-Code: </span><a class="ps-list__text" href="#">{{ $latest_product->sku_code ?? 'N/A' }}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
