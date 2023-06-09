@extends('layout')

@section('main')


<main class="index">
    <!-- PROOF -->
    <article class="proof__art">
        <div class="art__div1">
            <p class="div1__p">THE ULTIMATE LUXURY EXPERIENCE</p>
            <p class="div1__p1"> The Perfect Base For You</p>
            <div class="div1__button">
                <button class="div__button1">TAKE A TOUR</button>
                <button class="div__button2">LEARN MORE</button>
            </div>
        </div>
        <div class="art__div2">
            <div class="div2__div">
                <div>
                    <p>Arrival Date</p>
                    <input type="date">
                    <div class="div2__line"></div>
                </div>
                <div>
                    <p>LeDeparture Date</p>
                    <input type="date">
                    <div class="div2__line"></div>
                </div>
                <div>
                    <button class="div2__button">CHECK AVAILABILITY</button>
                </div>
            </div>
        </div>
    </article>


    <!-- ABOUT US  -->
    <article class="about__art">
        <div class="art__div1">
            <h2>ABOUT US</h2>
            <p class="div1__p1">Discover Our Underground</p>
            <p class="div1__p2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore
                et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
                ex ea commodo consequat.</p>
            <div>
                <button>BOOK NOW</button>
            </div>
        </div>
        <div>
            <div class="art__div2">
                <div class="div2__img1"><img src="./assets/index/mucama.jpg" alt="algo"></div>
                <div class="div2__div">
                    <img src="assets/group-person.svg" alt="group-person">
                    <p class="div__p1">Strong Team</p>
                    <p class="div__p2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                    </p>
                </div>
            </div>
            <div class="art__div3">
                <div><img src="./assets/room/room4.webp" alt="algo" class="div3__img"></div>
                <div class="div3__div">
                    <img src="assets/calendar-logo.svg" alt="calendar-logo" class="div3__img2">
                    <p class="div__p1">Luxury Room</p>
                    <p class="div__p2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                    </p>
                </div>
            </div>
        </div>
    </article>
    <!-- ROOMS -->
    <article class="room__art">
        <p class="art__p1">ROOMS</p>
        <p class="art__p2">Hand Picked Rooms</p>

        <div class="swiperRoom swiper">

            <div class="swiper-wrapper">

                @foreach ($rooms as $room)
                <div class="swiper-slide">
                    <div class="div__img">
                        <img src="assets/room/room3.jpg" alt="algomas">
                    </div>
                    <div class="art__div1">
                        <p class="div1__p1">{{$room['roomType']}}</p>
                        <p class="div1__p2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore
                            et dolore.</p>
                        <p class="div1__p3">{{$room['price']}}<span>/Night</span></p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="swiper-button-prev room-prev"></div>
            <div class="swiper-button-next room-next"></div>


        </div>

    </article>
    <!-- INTRO VIDEO -->
    <article class="video__art">
        <div class="video__div">
            <p class="art__p1">INTRO VIDEO</p>
            <p class="art__p2">Meet Whit Our Luxury Place</p>
            <p class="art__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
                ex ea commodo consequat you have to understand this.</p>
            <iframe class="video" src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <button>BOOK NOW</button>
        </div>

    </article>
    <!-- FACILITIES -->
    <article class="facilities__art">
        <p class="art__p1">FACILITIES</p>
        <p class="art__p2">Core Features</p>


        <div class="swiper swiperFacilities">

            <div class="swiper-wrapper">
                <?php foreach ($amenities as $amenitie) : ?>
                    <div class="swiper-slide">
                        <div class="art__div ">
                            <p class="div__p1"><?= $amenitie['id'] ?></p>
                            <img src="./assets/index/facilities/facilities1.svg" alt="">
                            <p class="div__p2"><?= $amenitie['name'] ?></p>
                            <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut labore
                                et dolore magna..</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>


            <div class="swiper-pagination"></div>

        </div>
        <div class="flexing">

            <div class="art__div ">
                <p class="div__p1">01</p>
                <img src="./assets/index/facilities/facilities1.svg" alt="">
                <p class="div__p2">Have High Rating</p>
                <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor
                    incididunt ut labore
                    et dolore magna..</p>
            </div>

            <div class="art__div ">
                <p class="div__p1">02</p>
                <img src="./assets/index/facilities/clock.svg" alt="">
                <p class="div__p2">Quiet Hours</p>
                <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor
                    incididunt ut labore
                    et dolore magna..</p>
            </div>


            <div class="art__div ">
                <p class="div__p1">03</p>
                <img src="./assets/index/facilities/location.svg" alt="">
                <p class="div__p2">Best Locations</p>
                <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor
                    incididunt ut labore
                    et dolore magna..</p>
            </div>

            <div class="art__div ">
                <p class="div__p1">04</p>
                <img src="./assets/index/facilities/offClock.svg" alt="">
                <p class="div__p2">Free Cancellation</p>
                <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor
                    incididunt ut labore
                    et dolore magna..</p>
            </div>


            <div class="art__div">
                <p class="div__p1">05</p>
                <img src="./assets/index/facilities/payCard.svg" alt="">
                <p class="div__p2">Payment Options</p>
                <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor
                    incididunt ut labore
                    et dolore magna..</p>
            </div>

            <div class="art__div">
                <p class="div__p1">06</p>
                <img src="./assets/index/facilities/offerSpecial.svg" alt="">
                <p class="div__p2">Special Offers</p>
                <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor
                    incididunt ut labore
                    et dolore magna..</p>
            </div>
        </div>
    </article>
    <!-- MENU FOOD -->
    <article class="menu__art">
        <img class="menu__img" src="./assets/index/pizza.svg" alt="">
        <p class="art__p1">MENU</p>
        <p class="art__p2">Our Foods Menu</p>


        <div class="swiper swiperMenu">

            <div class="swiper-wrapper wrapper__menu">


                <div class="swiper-slide">

                    <div class="silde__menu">
                        <div class="art__div">
                            <img src="./assets/index/bacoon.jpg" alt="">
                            <div class="div__div">
                                <p class="div__p1">Eggs & Bacon</p>
                                <p class="div__p2">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                                    eiusmod
                                    tempor.
                                </p>
                                <p class="div__p">→</p>
                            </div>
                        </div>
                        <div class="art__div">
                            <img src="./assets/index/coofeAndTea.jpg" alt="">
                            <div class="div__div">
                                <p class="div__p1">Tea or Coffe</p>
                                <p class="div__p2">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                                    eiusmod
                                    tempor.
                                </p>
                                <p class="div__p">→</p>
                            </div>
                        </div>
                        <div class="art__div">
                            <img src="./assets/index/chia.jpg" alt="">
                            <div class="div__div">
                                <p class="div__p1">Chia Oatmeal</p>
                                <p class="div__p2">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                                    eiusmod
                                    tempor.
                                </p>
                                <p class="div__p">→</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">

                    <div class="silde__menu">
                        <div class="art__div">
                            <img src="./assets/index/bacoon.jpg" alt="">
                            <div class="div__div">
                                <p class="div__p1">Fruit Parfait</p>
                                <p class="div__p2">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                                    eiusmod
                                    tempor.
                                </p>
                                <p class="div__p">→</p>
                            </div>
                        </div>
                        <div class="art__div">
                            <img src="./assets/index/coofeAndTea.jpg" alt="">
                            <div class="div__div">
                                <p class="div__p1">Marmalade Selection</p>
                                <p class="div__p2">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                                    eiusmod
                                    tempor.
                                </p>
                                <p class="div__p">→</p>
                            </div>
                        </div>
                        <div class="art__div">
                            <img src="./assets/index/chia.jpg" alt="">
                            <div class="div__div">
                                <p class="div__p1">Cheese Plate</p>
                                <p class="div__p2">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                                    eiusmod
                                    tempor.
                                </p>
                                <p class="div__p">→</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-button-prev menu-prev"></div>
            <div class="swiper-button-next menu-next"></div>

        </div>
        <div class="div__img">
            <div class="swiper swiperImg">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="img__food"> <img src="" alt="" class="menu__img2 "></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img__food"> <img src="" alt="" class="menu__img2 "></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img__food"> <img src="" alt="" class="menu__img2 "></div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </article>
    <!-- NUMBER  -->
    <article class="number__art">
        <div class="art__div">
            <img src="assets/numbers/cohete.svg" alt="">
            <p class="div__p1">84K<span>+</span></p>
            <p class="div__p2">Project are Completed</p>
        </div>
        <div class="art__div">
            <img src="assets/numbers/group-numbers.svg" alt="">
            <p class="div__p1">10M<span>+</span></p>
            <p class="div__p2">Active Backers Around World</p>
        </div>
        <div class="art__div">
            <img src="assets/numbers/grahics.svg" alt="">
            <p class="div__p1">02K<span>+</span></p>
            <p class="div__p2">Categories Served</p>
        </div>
        <div class="art__div">
            <img src="assets/numbers/book.svg" alt="">
            <p class="div__p1">100M<span>+</span></p>
            <p class="div__p2">Idea Raised Funds</p>
        </div>
    </article>
</main>

@endsection