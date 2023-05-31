@extends('layout')

@section('main')

<main class="details">
        <!-- PROOF -->
        <article class="proof__art">
            <div class="art__div">
                <p class="art__p1">THE ULTIMATE LUXURY</p>
                <p class="art__p2">Ultimate Room</p>
                <div class="div__div">
                    <p>Home | <span>Rooms</span></p>
                </div>
            </div>
        </article>
        <section>
            <!-- LUXURY -->
            <article class="luxury__art">
                <div class="art__div">
                    <div class="div__div">
                        <div class="div1__div">
                            <p class="art__p1">DOUBLE BED</p>
                            <p class="art__p2">Luxury Double Bed</p>
                            <p class="art__p3">$345<span>/Night</span> </p>
                        </div>
                        <div class="art__div1"><img src="../assets/room/room1.webp" alt=""></div>
                    </div>
                    <div class="art__div2">
                        <p class="div2__p1">Check Availability</p>
                        <p class="div2__p2">Check In</p>
                        <input type="date">
                        <p class="div2__p2">Check Out</p>
                        <input type="date">
                        <button>CHECK AVAILABILITY</button>
                    </div>
                </div>
                <p class="art__p4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                    quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                    aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                    nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                    velit,
                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                    voluptatem.
                </p>
            </article>
            <!-- AMENITIES -->
            <article class="amenities__art">
                <p class="art__p1">Amenities</p>
                <div class="art__line"></div>
                <div class="art__list">
                    <div class="div1__div">
                        <div class="div__img1">
                            <img src="../assets/icons/air_condition.svg" alt="">
                        </div>
                        <p>Air conditioner</p>
                    </div>
                    <div class="div1__div">
                        <div class="div__img1">
                            <img src="../assets/icons/breakfast.svg" alt="">
                        </div>
                        <p>Breakfast</p>
                    </div>
                    <div class="div1__div">
                        <div class="div__img1">
                            <img src="../assets/icons/cleaning.svg" alt="">
                        </div>
                        <p>Cleaning</p>
                    </div>
                    <div class="div1__div">
                        <div class="div__img1">
                            <img src="../assets/icons/grocery.svg" alt="">
                        </div>
                        <p>Grocery</p>
                    </div>
                    <div class="div1__div">
                        <div class="div__img1">
                            <img src="../assets/icons/shop.svg" alt="">
                        </div>
                        <p>Shop near</p>
                    </div>
                    <div class="div1__div">
                        <div class="div__img1">
                            <img src="../assets/icons/wifi.svg" alt="">
                        </div>
                        <p>High speed WIFI</p>
                    </div>
                    <div class="div1__div">
                        <div class="div__img1">
                            <img src="../assets/icons/kitchen.svg" alt="">
                        </div>
                        <p>Kitchen</p>
                    </div>
                    <div class="div1__div">
                        <div class="div__img1">
                            <img src="../assets/icons/shower.svg" alt="">
                        </div>
                        <p>Shower</p>
                    </div>
                    <div class="div1__div">
                        <div class="div__img1">
                            <img src="../assets/icons/towel.svg" alt="">
                        </div>
                        <p>24/7 Online Support</p>
                    </div>
                    <div class="div1__div">
                        <div class="div__img1">
                            <img src="../assets/icons/towel.svg" alt="">
                        </div>
                        <p>Smart Security</p>
                    </div>
                    <div class="div1__div">
                        <div class="div__img1">
                            <img src="../assets/icons/bed.svg" alt="">
                        </div>
                        <p>Single bed</p>
                    </div>
                    <div class="div1__div">
                        <div class="div__img1">
                            <img src="../assets/icons/towel.svg" alt="">
                        </div>
                        <p>Towels</p>
                    </div>
                    <div class="div1__div">
                        <div class="div__img1">
                            <img src="../assets/icons/towel.svg" alt="">
                        </div>
                        <p>Strong Locker</p>
                    </div>
                    <div class="div1__div">
                        <div class="div__img1">
                            <img src="../assets/icons/towel.svg" alt="">
                        </div>
                        <p>Expert Team</p>
                    </div>
                </div>
            </article>
            <!-- FOUNDER -->
            <article class="founder__art">
                <div class="div__img">
                    <img class="img__1" src="../assets/founder.jpg" alt="">
                </div>
                <p class="art__p1">Rosalina D. William</p>
                <p class="art__p2">FOUNDER, QUX CO.</p>
                <p class="art__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore.</p>
            </article>
            <!-- CANCELLATION -->
            <article class="cancellation__art">
                <p class="art__p1">Cancellation</p>
                <div class="art__line"></div>
                <p class="art__p2">Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut
                    metus mattis, consequat
                    metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get
                    a
                    full refund.</p>
            </article>
            <!-- RELATED ROOMS -->
            <article class="related__art">
                <p class="art__p1">Realted Rooms</p>
                <div class="art__line"></div>

                <div class="swiper swiperRoom">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="div__img">
                                <img src="../assets/room/room5.jpg" alt="algomas">
                            </div>
                            <div class="art__div1">
                                <p class="div1__p1">Minimal Duplex Room</p>
                                <p class="div1__p2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod
                                    tempor
                                    incididunt ut labore
                                    et dolore.</p>
                                <p class="div1__p3">$345/Night<span>Booking Now</span></p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="div__img">
                                <img src="../assets/room/room5.jpg" alt="algomas">
                            </div>
                            <div class="art__div1">
                                <p class="div1__p1">Minimal Duplex Room</p>
                                <p class="div1__p2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod
                                    tempor
                                    incididunt ut labore
                                    et dolore.</p>
                                <p class="div1__p3">$345/Night<span>Booking Now</span></p>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-button-prev room-prev"></div>
                    <div class="swiper-button-next room-next"></div>

                </div>
                
                <div class="flexing">

                    <div class="swiper-slide">
                        <div class="div__img">
                            <img src="../assets/room/room5.jpg" alt="algomas">
                        </div>
                        <div class="art__div1">
                            <p class="div1__p1">Minimal Duplex Room</p>
                            <p class="div1__p2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod
                                tempor
                                incididunt ut labore
                                et dolore.</p>
                            <p class="div1__p3">$345/Night<span>Booking Now</span></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="div__img">
                            <img src="../assets/room/room5.jpg" alt="algomas">
                        </div>
                        <div class="art__div1">
                            <p class="div1__p1">Minimal Duplex Room</p>
                            <p class="div1__p2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod
                                tempor
                                incididunt ut labore
                                et dolore.</p>
                            <p class="div1__p3">$345/Night<span>Booking Now</span></p>
                        </div>
                    </div>

                </div>

            </article>
        </section>
    </main>


@endsection