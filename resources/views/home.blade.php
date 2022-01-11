{{-- untuk menghubungkan dari folder layout di dalam file --}}
@extends('layouts.main')
@section('container')



<body>
        <section>
                <div class="box">
                        <h2 data-jarallax-element="0 -200">Nifty NFT</h2>
                        <div class="container">
                                <div class =imgBx jaralax" class="jarallax-img">
                                        <img src="/img/ku01.jpg">
                                </div>
                <div class= "content" data-jarallax-element="-200 0">
                        <p> Nifty  adalah 10.000 karakter animasi 3D yang dihasilkan secara acak di blockchain Ethereum.   </p>
                        
                </div>
        </section>
        <section>
                <div class="box">
                        <h2 data-jarallax-element="0 200">Unique</h2>
                        <div class="container">
                                <div class =imgBx jaralax" class="jarallax-img">
                                        <img src="/img/ku1.png">
                                </div>
                <div class= "content" data-jarallax-element="-200 0">
                        <p>Masing-masing memiliki keunikan tetapi beberapa Merupakan item langka.</p>
                        
                </div>
        </section>
        <section>
                <div class="box">
                        <h2 data-jarallax-element="0 -200">Floaty Style </h2>
                        <div class="container">
                                <div class =imgBx jaralax" class="jarallax-img">
                                        <img src="/img/ku4.png">
                                </div>
                <div class= "content" data-jarallax-element="-200 0">
                        <p> Setiap ciri NFT  dibuat secara manual oleh MonsterNifty dengan bergaya floaty.</p>
                        
                </div>
        </section>

        <link href="{{ URL::asset('js/jarallax.js') }}" rel="script">
        <link href="{{ URL::asset('js/jarallax-element.js') }}" rel="script">
        <link href="{{ URL::asset('js/') }}" rel="script">      
</body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>

@endsection



