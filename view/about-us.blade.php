@extends('layout')

@section('main')

<main class="about">
        <!-- PROOF -->
        <article class="proof__art">
            <div class="art__div">
                <p class="art__p1">THE ULTIMATE LUXURY</p>
                <p class="art__p2">About Us</p>
                <div class="div__div">
                    <p>Home | <span>About</span></p>
                </div>
            </div>
        </article>
        <!-- VIDEO -->
        <article class="video__art">
            <div class="video__div">
                <iframe class="video" src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <p class="art__p">Hello. Our hotel has been present for over 20 years. We make the best for all our
                customers
            </p>
            <div class="art__div">
                <div>
                    <svg width="60" height="52" viewBox="0 0 60 52" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect x="0.685486" y="0.450195" width="58.46" height="50.56" fill="url(#pattern0)"/>
                        <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_54_1226" transform="scale(0.0135135 0.015625)"/>
                        </pattern>
                        <image id="image0_54_1226" width="74" height="64" xlink:href="data:image/png;base64,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"/>
                        </defs>
                        </svg>
                    <p>BREAKFAST</p>
                </div>
                <div>
                    <svg width="72" height="67" viewBox="0 0 72 67" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="72" height="67" fill="url(#pattern0)"/>
                        <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_17_1434" transform="scale(0.0138889 0.0149254)"/>
                        </pattern>
                        <image id="image0_17_1434" width="72" height="67" xlink:href="data:image/png;base64,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"/>
                        </defs>
                        </svg>
                        
                    <p>AIRPORT PICKUP</p>
                </div>
                <div>
                    <svg width="54" height="53" viewBox="0 0 54 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.7313 9.52148C25.2819 9.52148 23.8868 9.95103 22.697 10.7637C22.3453 11.0039 22.2564 11.4816 22.4984 11.8307C22.7405 12.1798 23.2218 12.268 23.5735 12.0279C24.5043 11.3921 25.5962 11.0561 26.7313 11.0561C29.8073 11.0561 32.3097 13.5396 32.3097 16.5924C32.3097 19.6451 29.8073 22.1288 26.7313 22.1288C23.6554 22.1288 21.153 19.6451 21.153 16.5924C21.153 15.6918 21.3637 14.8333 21.7792 14.0409C21.9762 13.6649 21.829 13.2016 21.4502 13.0061C21.0713 12.8107 20.6048 12.9566 20.4076 13.3326C19.8838 14.3318 19.6069 15.459 19.6069 16.5924C19.607 20.4914 22.8029 23.6633 26.7313 23.6633C30.6597 23.6633 33.8557 20.4914 33.8557 16.5924C33.8557 12.6935 30.6597 9.52148 26.7313 9.52148Z" fill="#BEAD8E"/>
                        <path d="M53.137 51.0985L45.5072 32.9039C45.3873 32.6179 45.1058 32.4315 44.7936 32.4315H37.1904C38.6692 30.4459 39.9002 28.4682 40.8615 26.5263C42.5652 23.0848 43.4289 19.7427 43.4289 16.5925C43.4288 7.45463 35.9384 0.0205078 26.7314 0.0205078C17.5243 0.0205078 10.0339 7.45463 10.0339 16.5924C10.0339 19.7426 10.8976 23.0848 12.6013 26.5262C13.5625 28.4681 14.7935 30.4459 16.2724 32.4314H8.66921C8.357 32.4314 8.0754 32.6179 7.95558 32.9038L2.75645 45.302C2.59239 45.6932 2.77889 46.1423 3.17307 46.305C3.27025 46.3452 3.37073 46.3642 3.46977 46.3642C3.77267 46.3642 4.06016 46.1864 4.1837 45.8916L4.92555 44.1225H10.1882L7.46102 50.6259H2.19852L2.98905 48.7407C3.15312 48.3494 2.96662 47.9003 2.57244 47.7376C2.17805 47.5745 1.72566 47.7599 1.5617 48.151L0.325808 51.0985C0.226461 51.3352 0.252926 51.6057 0.396415 51.8189C0.539699 52.0323 0.780985 52.1605 1.03943 52.1605H52.4233C52.6816 52.1605 52.923 52.0323 53.0664 51.8189C53.2098 51.6057 53.2364 51.3352 53.137 51.0985ZM11.58 16.5924C11.58 8.30069 18.3769 1.55497 26.7314 1.55497C35.0858 1.55497 41.8827 8.30079 41.8827 16.5924C41.8827 20.0694 40.6654 25.6255 35.0343 32.706C35.0287 32.7126 35.0236 32.7196 35.0182 32.7264C34.7306 33.0877 34.4319 33.4527 34.1208 33.8219C31.0264 37.4943 27.8951 40.1759 26.7313 41.1287C25.5708 40.1792 22.4543 37.511 19.3621 33.8456C19.0433 33.4677 18.7375 33.0941 18.4432 32.7244C18.4384 32.7185 18.434 32.7124 18.429 32.7066C12.7982 25.6266 11.58 20.0707 11.58 16.5924ZM9.18476 33.966H14.4475L12.5279 38.5433H7.26532L9.18476 33.966ZM13.7053 50.626L18.5373 39.1035L32.2882 50.626H13.7053ZM34.6848 50.626L18.7281 37.255C18.5397 37.097 18.2867 37.0379 18.0474 37.0955C17.808 37.153 17.6103 37.3206 17.5158 37.5463L12.0308 50.6259H9.13576L12.061 43.65C12.1603 43.4132 12.1338 43.1428 11.9904 42.9295C11.8471 42.7161 11.6057 42.5879 11.3472 42.5879H5.56929L6.62189 40.0777H13.0436C13.3558 40.0777 13.6374 39.8912 13.7572 39.6053L16.1221 33.9659H17.4638C17.6967 34.2541 17.9334 34.5424 18.1764 34.8306C22.1653 39.5588 26.093 42.5944 26.2583 42.7214C26.3977 42.8285 26.5645 42.8818 26.7314 42.8818C26.8982 42.8818 27.0652 42.8284 27.2044 42.7214C27.2953 42.6517 28.5232 41.7022 30.272 40.0778H39.0262C39.4532 40.0778 39.7993 39.7343 39.7993 39.3105C39.7993 38.8868 39.4532 38.5433 39.0262 38.5433H31.8653C32.9371 37.4737 34.1086 36.2266 35.2864 34.8307C35.5294 34.5425 35.7663 34.2543 35.9991 33.966H44.278L46.1974 38.5433H42.1184C41.6914 38.5433 41.3453 38.8868 41.3453 39.3105C41.3453 39.7343 41.6913 40.0778 42.1184 40.0778H46.8408L47.8934 42.588H31.9659C31.6432 42.588 31.3546 42.7868 31.2416 43.0868C31.1288 43.3868 31.2154 43.7248 31.4591 43.9347L39.2263 50.626H34.6848V50.626ZM41.5849 50.626L34.0358 44.1226H48.5371L51.2643 50.626H41.5849Z" fill="#BEAD8E"/>
                        </svg>
                        
                    <p>CITY GUIDE</p>
                </div>
                <div>

                        
                    <p>BBQ Party</p>
                </div>
                <div class="div__icon">
                    <svg width="53" height="41" viewBox="0 0 53 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.00501 24.5312C6.86028 24.3874 6.66076 24.3047 6.4571 24.3047C6.25241 24.3047 6.05289 24.3874 5.90816 24.5312C5.76447 24.6759 5.68176 24.8754 5.68176 25.08C5.68176 25.2837 5.76447 25.4842 5.90816 25.6279C6.05289 25.7727 6.25241 25.8554 6.4571 25.8554C6.66076 25.8554 6.86028 25.7727 7.00501 25.6279C7.14974 25.4842 7.23245 25.2837 7.23245 25.08C7.23245 24.8753 7.14974 24.6758 7.00501 24.5312Z" fill="#BEAD8E"/>
                        <path d="M51.6378 22.3286H49.5399V20.8418C49.5399 20.1293 48.9603 19.5496 48.2477 19.5496H47.6871V15.6118H50.7115C51.092 15.6118 51.4353 15.4465 51.6536 15.1583C51.8717 14.8701 51.9377 14.4947 51.8343 14.1285L50.1267 8.07599C49.9559 7.4704 49.3525 7.01367 48.7232 7.01367H45.1003C44.471 7.01367 43.8677 7.4703 43.6968 8.07599L41.9893 14.1286C41.886 14.4948 41.9519 14.8702 42.17 15.1584C42.3881 15.4466 42.7316 15.6119 43.1121 15.6119H46.1364V19.5497H45.5759C44.8633 19.5497 44.2837 20.1294 44.2837 20.8419V22.3287H42.4865V20.2863C42.4865 19.5737 41.9068 18.994 41.1942 18.994H20.2623C19.8341 18.994 19.4869 19.3412 19.4869 19.7694C19.4869 20.1976 19.8341 20.5447 20.2623 20.5447H40.9359V26.2809H39.8499V25.1487C39.8499 23.8661 38.8065 22.8227 37.5239 22.8227H29.4841C28.2015 22.8227 27.1581 23.8661 27.1581 25.1487V26.2809H26.094V25.1487C26.094 23.8661 25.0506 22.8227 23.7679 22.8227H15.7282C14.4455 22.8227 13.4021 23.8661 13.4021 25.1487V26.2809H11.9941V20.5447H16.7473C17.1755 20.5447 17.5226 20.1976 17.5226 19.7694C17.5226 19.3412 17.1755 18.994 16.7473 18.994H11.7357C11.0231 18.994 10.4434 19.5737 10.4434 20.2863V22.3287H8.6462V20.8421C8.6462 20.1295 8.06655 19.5498 7.35396 19.5498H6.79354V15.6118H9.81779C10.1983 15.6118 10.5417 15.4465 10.7599 15.1583C10.978 14.8701 11.044 14.4947 10.9406 14.1285L9.23308 8.07599C9.0623 7.4704 8.45888 7.01367 7.82961 7.01367H4.20669C3.57743 7.01367 2.97411 7.4703 2.80322 8.07599L1.09582 14.1285C0.992541 14.4947 1.05839 14.8701 1.27652 15.1583C1.49465 15.4465 1.83808 15.6118 2.21861 15.6118H5.24286V19.5497H4.68255C3.96996 19.5497 3.39031 20.1294 3.39031 20.8419V22.3286H1.29224C0.579646 22.3286 0 22.9083 0 23.6209V27.1797V32.9617C0 33.6743 0.579646 34.2539 1.29224 34.2539H6.54595V39.2607C6.54595 39.9732 7.1256 40.5529 7.83819 40.5529H11.3898C12.1024 40.5529 12.682 39.9732 12.682 39.2607V36.7653H31.9441C32.3723 36.7653 32.7194 36.4182 32.7194 35.99C32.7194 35.5618 32.3723 35.2146 31.9441 35.2146H12.4236C11.711 35.2146 11.1313 35.7943 11.1313 36.5069V39.0022H8.09664V32.1544H44.8335V39.0022H41.7988V36.5069C41.7988 35.7943 41.2191 35.2146 40.5065 35.2146H35.6657C35.2375 35.2146 34.8904 35.5618 34.8904 35.99C34.8904 36.4182 35.2375 36.7653 35.6657 36.7653H40.2481V39.2607C40.2481 39.9732 40.8277 40.5529 41.5403 40.5529H45.0919C45.8044 40.5529 46.3842 39.9732 46.3842 39.2607V34.2539H51.6378C52.3504 34.2539 52.93 33.6743 52.93 32.9617V23.6209C52.93 22.9084 52.3504 22.3286 51.6378 22.3286ZM43.6196 14.0611L45.1703 8.56425H48.6532L50.204 14.0611H43.6196ZM45.8345 21.1004H47.9892V22.2669H45.8345V21.1004ZM28.7088 25.1487C28.7088 24.7211 29.0567 24.3734 29.4842 24.3734H37.524C37.9515 24.3734 38.2993 24.7211 38.2993 25.1487V26.2809H28.7088V25.1487ZM15.7282 24.3734H23.7679C24.1954 24.3734 24.5433 24.7211 24.5433 25.1487V26.2809H14.9528V25.1487C14.9528 24.7211 15.3007 24.3734 15.7282 24.3734ZM2.726 14.0611L4.27668 8.56436H7.75952L9.3103 14.0611H2.726ZM4.94089 21.1004H7.09551V22.2669H4.94089V21.1004ZM7.46292 28.6068V30.6596C6.9329 30.8208 6.54585 31.3138 6.54585 31.8958V32.7032H1.55068V27.955H7.55658C7.496 28.162 7.46292 28.3805 7.46292 28.6068ZM1.55068 26.4044V23.8793H10.4434V26.2808H9.78895C9.52792 26.2808 9.27712 26.3246 9.04266 26.4044H1.55068ZM43.9164 30.6037H9.01361V28.6069C9.01361 28.1795 9.36148 27.8316 9.78895 27.8316H43.1411C43.5685 27.8316 43.9164 28.1795 43.9164 28.6069V30.6037ZM51.3793 32.7032H46.3842V31.8958C46.3842 31.3138 45.9972 30.8208 45.4671 30.6596V28.6068C45.4671 28.3805 45.434 28.162 45.3734 27.955H51.3793V32.7032ZM51.3793 26.4044H43.8873C43.6529 26.3246 43.4021 26.2808 43.1411 26.2808H42.4867V23.8793H51.3793V26.4044Z" fill="#BEAD8E"/>
                        <path d="M47.0219 24.5321C46.8772 24.3874 46.6777 24.3047 46.473 24.3047C46.2693 24.3047 46.0698 24.3874 45.9251 24.5321C45.7803 24.6758 45.6976 24.8753 45.6976 25.08C45.6976 25.2837 45.7803 25.4832 45.9251 25.6279C46.0688 25.7727 46.2693 25.8554 46.473 25.8554C46.6777 25.8554 46.8772 25.7727 47.0219 25.6279C47.1656 25.4832 47.2483 25.2837 47.2483 25.08C47.2483 24.8764 47.1656 24.6758 47.0219 24.5321Z" fill="#BEAD8E"/>
                        <path d="M37.9513 4.49334C38.3795 4.49334 38.7266 4.14619 38.7266 3.718V1.67017C38.7266 0.957575 38.147 0.37793 37.4344 0.37793H15.4957C14.7831 0.37793 14.2035 0.957575 14.2035 1.67017V13.1667C14.2035 13.8793 14.7831 14.459 15.4957 14.459H37.4344C38.147 14.459 38.7266 13.8793 38.7266 13.1667V7.23288C38.7266 6.80468 38.3795 6.45754 37.9513 6.45754C37.5231 6.45754 37.1759 6.80468 37.1759 7.23288V9.4272L33.5104 3.0785C33.3719 2.83866 33.1159 2.69083 32.839 2.69083C32.5619 2.69083 32.3061 2.83866 32.1675 3.0785L28.8683 8.79307L26.5673 4.80761C26.5662 4.80565 26.5647 4.80399 26.5636 4.80203C26.4979 4.69028 26.4038 4.5932 26.2835 4.52384C25.9126 4.30963 25.4385 4.43679 25.2244 4.80761L20.5474 12.9084H15.7542V1.92861H37.1759V3.718C37.1759 4.14619 37.5231 4.49334 37.9513 4.49334ZM32.839 5.01685L37.1759 12.5286V12.9084H28.283L32.839 5.01685ZM25.8959 6.74596L27.973 10.3438L26.4924 12.9084H22.338L25.8959 6.74596Z" fill="#BEAD8E"/>
                        <path d="M19.9191 2.81445C18.4701 2.81435 17.2911 3.99328 17.2911 5.44245C17.2911 6.89151 18.4701 8.07034 19.9191 8.07034C21.3682 8.07034 22.547 6.89151 22.547 5.44245C22.547 3.99328 21.3682 2.81445 19.9191 2.81445ZM19.9191 6.51966C19.3251 6.51966 18.8418 6.03636 18.8418 5.44245C18.8418 4.84833 19.3251 4.36514 19.9191 4.36514C20.513 4.36503 20.9963 4.84833 20.9963 5.44245C20.9963 6.03646 20.513 6.51966 19.9191 6.51966Z" fill="#BEAD8E"/>
                        </svg>
                        
                    <p>LUXURY ROOM</p>
                </div>
            </div>
        </article>
        <!-- RESTAURANT -->
        <article class="restaurant__art">
            <div class="art__div1"><img class="art__img" src="../assets/about/hosteleros.jpg" alt=""></div>
            <p class="art__p1">RESTAURANT</p>
            <p class="art__p2">Get Restaurant Facilities & Many Other More</p>
            <p class="art__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por
                incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
            </p>
            <button>TAKE A TOUR</button>
        </article>
        <!-- FACILITIES -->
        <article class="facilities__art">
            <p class="art__p1">FACILITIES</p>
            <p class="art__p2">Core Features</p>


            <div class="flexing">
                <div class="art__div n1">
                    <p class="div__p1">01</p>
                    <img src="../assets/index/facilities/facilities1.svg" alt="">
                    <p class="div__p2">Have High Rating</p>
                    <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore
                        et dolore magna..</p>
                </div>
                <div class="art__div n2">
                    <p class="div__p1">02</p>
                    <img src="../assets/index/facilities/clock.svg" alt="">
                    <p class="div__p2">Quiet Hours</p>
                    <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore
                        et dolore magna..</p>
                </div>
                <div class="art__div n3">
                    <p class="div__p1">03</p>
                    <img src="../assets/index/facilities/location.svg" alt="">
                    <p class="div__p2">Best Locations</p>
                    <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore
                        et dolore magna..</p>
                </div>
                <div class="art__div n4">
                    <p class="div__p1">04</p>
                    <img src="../assets/index/facilities/offClock.svg" alt="">
                    <p class="div__p2">Free Cancellation</p>
                    <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore
                        et dolore magna..</p>
                </div>
                <div class="art__div n5">
                    <p class="div__p1">05</p>
                    <img src="../assets/index/facilities/payCard.svg" alt="">
                    <p class="div__p2">Payment Options</p>
                    <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore
                        et dolore magna..</p>
                </div>
                <div class="art__div n6">
                    <p class="div__p1">06</p>
                    <img src="../assets/index/facilities/offerSpecial.svg" alt="">
                    <p class="div__p2">Special Offers</p>
                    <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore
                        et dolore magna..</p>
                </div>
            </div>



            <div class="swiper swiperFacilities">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="art__div n1">
                            <p class="div__p1">01</p>
                            <img src="../assets/index/facilities/facilities1.svg" alt="">
                            <p class="div__p2">Have High Rating</p>
                            <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut labore
                                et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="art__div n2">
                            <p class="div__p1">02</p>
                            <img src="../assets/index/facilities/clock.svg" alt="">
                            <p class="div__p2">Quiet Hours</p>
                            <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut labore
                                et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="art__div n3">
                            <p class="div__p1">03</p>
                            <img src="../assets/index/facilities/location.svg" alt="">
                            <p class="div__p2">Best Locations</p>
                            <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut labore
                                et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="art__div n4">
                            <p class="div__p1">04</p>
                            <img src="../assets/index/facilities/offClock.svg" alt="">
                            <p class="div__p2">Free Cancellation</p>
                            <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut labore
                                et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="art__div n5">
                            <p class="div__p1">05</p>
                            <img src="../assets/index/facilities/payCard.svg" alt="">
                            <p class="div__p2">Payment Options</p>
                            <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut labore
                                et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="art__div n6">
                            <p class="div__p1">06</p>
                            <img src="../assets/index/facilities/offerSpecial.svg" alt="">
                            <p class="div__p2">Special Offers</p>
                            <p class="div__p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut labore
                                et dolore magna..</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>

            </div>
        </article>
        <!-- COUNTER -->
        <article class="counter__art">
            <div class="art__div1">
                <p class="art__p1">COUNTER</p>
                <p class="art__p2">Some Fun Facts</p>
            </div>
            <div class="flexing">
                <div class="art__div">
                    <img src="../assets/about/dialogo.svg" alt="">
                    <div class="div__div">
                        <p class="div__p1">8000</p>
                        <p class="div__p2">Happy Users</p>
                    </div>
                    <p class="div__p">→</p>
                </div>
                <div class="art__div">
                    <img src="../assets/about/like.svg" alt="">
                    <div class="div__div">
                        <p class="div__p1">10M</p>
                        <p class="div__p2">Reviews & Appriciate</p>
                    </div>
                    <p class="div__p">→</p>
                </div>
                <div class="art__div">
                    <img src="../assets/about/world.svg" alt="">
                    <div class="div__div">
                        <p class="div__p1">100</p>
                        <p class="div__p2">Country Coverage</p>
                    </div>
                    <p class="div__p">→</p>
                </div>
            </div>

            <div class="swiper swiperImgTwo">
                <div class="swiper-wrapper">


                    <div class="swiper-slide"><img class="art__img" src="../assets/about/hotel.jpg" alt=""></div>

                    <div class="swiper-slide"><img class="art__img" src="../assets/about/hosteleros.jpg" alt=""></div>


                </div>

                <div class="swiper-pagination"></div>

            </div>

        </article>
    </main>

@endsection