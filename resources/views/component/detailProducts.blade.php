@extends('landingPage')

@section('content')
    
    <div class="container">
        @foreach ($detailProduct as $data)
            
        <div class="photoProduct box">
            <img class="dimage" src="{{ asset($data->image) }}">
        </div>
        <div class="paymentDetail box">
            <h1 style="text-align: center; font-weight: 900;">{{ $data->name }}</h1>
            <div class="itemDetail">
                <div class="info">
                    <p>Size</p>
                    <p>{{ $data->size }}</p>
                </div>
                <div class="info">
                    <p>Condition</p>
                    <p>{{ $data->condition }}</p>
                </div>
                <div class="info">
                    <p>data Location</p>
                    <p>{{ $data->location }}</p>
                </div>
            </div>
            <div class="itemDetail">
                <h4 style="margin-bottom: 2vh;">Payment Summary</h4>
                <div class="info">
                    <p>Product Price</p>
                    <p>Rp. {{ $data->price }}</p>
                </div>
                {{-- <div class="info">
                    <p>Admin</p>
                    <p>Rp. 80.000</p>
                </div>
                <div class="info total">
                    <p>Total</p>
                    <p>Rp. 1.500.000</p>
                </div> --}}
                <h4 style="margin: 2vh 0vh;">Seller Number</h4>
                <div class="detailSeller">
                    <div class="phoneNum">
                        <p>{{ $data->sellerName }}</p>
                        <p>{{ $data->sellerNumber }}</p>
                    </div>
                    <div class="buyMe">
                        <button type="submit" class="buy-btn" >BUY</button>
                    </div>
                </div>
            @endforeach
                
                <div class="paymentInfo" style="display: none;">
                    <!-- Untuk QRCODE rekening seller -->
                    <div class="bankInfo">
                        <img src="/SourceIMG/qrcode.png" class="bankInfo">
                        <figcaption>Bank Central Asia.Tbk</figcaption>
                    </div>
                    
                    <!-- container upload bukti transfer  -->
                    <div class="paymentProof">
                        <caption>Upload the proof of payment</caption>             
                        <i class="fa-solid fa-cloud-arrow-up  fa-4x upload" style="color: white;"></i>   
                        <button type="submit" class="paid-btn">PAID</button>
                    </div>
                </div>
                
                <div class="status">
                    <h3 style="display: none;">Payment Status</h3>
                    <img class="success" src="/SourceIMG/icon-checkList.png" alt="">
                    <img class="failed" src="/SourceIMG/icon-cancel.png" alt="">
                    <img class="waiting" src="/SourceIMG/icon-pending.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="description">
        <h1 style="font-weight: 950; margin-bottom: 2vh;">Description</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Impedit ratione laboriosam officiis officia incidunt beatae ullam 
            ducimus velit iusto, omnis fugiat porro. Ipsum dolorum ab cum dolores 
            voluptatum beatae ipsa voluptatibus qui ratione, quasi fuga enim error 
            autem aut accusamus? Tempora, natus repudiandae nostrum earum exercitationem 
            labore quas rerum consequuntur! Esse expedita aliquid natus perferendis 
            alias, ullam quod quas. Voluptatum, repudiandae?
        </p>
    </div>
    <script src="{{ asset('js/detailProduct.js') }}"></script>
@endsection