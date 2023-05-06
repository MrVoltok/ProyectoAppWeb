@extends('layouts.app')

@section('content')
<section class="store-content pad-sect" id="home">
    <div class="main-products">
        <p class="subtitle">TINTES</p>
        <ul class="list-product">
            @for($i=0; $i<4 ;$i++)
                <li>
                    <div class="icon">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <img src="../img/{{ $products[$i]->image }}.jpg" alt="">
                    <div class="product-info">
                        <p class="product-name">{{ $products[$i]->name }}</p>
                        <p class="price">${{ $products[$i]->precio }}</p>
                    </div>
                </li>
            @endfor
            <li class="see-more">
                <p>Ver más</p>
            </li>
        </ul>

        <p class="subtitle">TINTES</p>
        <ul class="list-product">
            <li>
                <div class="icon">
                    <i class="fa-regular fa-heart"></i>
                </div>
                <img src="../img/product_1.jpg" alt="">
                <div class="product-info">
                    <p class="product-name">Tinte L'OREAL</p>
                    <p class="price">$50.00</p>
                </div>
            </li>
            <li>
                <div class="icon">
                    <i class="fa-regular fa-heart"></i>
                </div>
                <img src="../img/product_4.jpg" alt="">
                <div class="product-info">
                    <p class="product-name">Tinte KOLESTON</p>
                    <p class="price">$24.90</p>
                </div>
            </li>
            <li>
                <div class="icon">
                    <i class="fa-regular fa-heart"></i>
                </div>
                <img src="../img/product_5.jpg" alt="">
                <div class="product-info">
                    <p class="product-name">Tinte PALETTE</p>
                    <p class="price">$24.90</p>
                </div>
            </li>
            <li>
                <div class="icon">
                    <i class="fa-regular fa-heart"></i>
                </div>
                <img src="../img/product_6.jpg" alt="">
                <div class="product-info">
                    <Tinte class="product-name">Tinte PALETTE</p>
                    <p class="price">$24.90</p>
                </div>
            </li>
            <li class="see-more">
                <p>Ver más</p>
            </li>
        </ul>
    </div>
</section>
@endsection