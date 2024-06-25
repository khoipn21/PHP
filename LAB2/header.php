<?php
echo '
    <header class="w-full mx-auto px-[24px] py-[8px] bg-white flex items-center justify-center mb-10">
        <div class="container flex gap-[48px]">
            <a href="#" class="header-logo flex flex-col justify-center items-center">
                <img src="./img/tikiLogo.png" alt="logo" width="96" class="max-w-full ">
                <span class="text-primary tracking-normal cursor-pointer font-Inter ">Tốt & Nhanh</span>
            </a>
            <div class="mid-container flex w-full h-auto p-0 items-center">
                <div class="mid-left search-bar flex w-[60%] max-w-[60%] border rounded-lg items-center h-auto">
                    <img src="./img/searchIcon.png" alt="search-icon" width="20" height="20" class="search-icon ml-[18px] max-w-full">
                    <input type="text" class="search-input outline-none border-0 px-[8px] font-[400] flex-1" placeholder="Bạn tìm gì hôm nay">
                    <button class="search-button cursor-pointer w-[92px] h-[38px] border-0 rounded-r-[18px] text-primary leading-[150%] font-[400] flex justify-center items-center before:border-l before:border-solid before:h-[24px] before:mr-[10px]">Tìm
                        kiếm</button>
                </div>
                <div class="mid-right menu-buttons flex justify-end items-center ml-[48px]">
                    <div class="homepage-btn flex justify-center items-center py-[8px] px-[16px] cursor-pointer rounded-[8px] ">
                        <img src="./img/homeIcon.png" class="w-[24px] h-[24px] mr-[4px] rounded-full" alt="">
                        <a href="">Trang Chủ</a>
                    </div>
                    <div class="account-btn flex justify-center items-center py-[8px] px-[16px] cursor-pointer rounded-[8px] ">
                        <img src="./img/accountIcon.png" class="w-[24px] h-[24px] mr-[4px] rounded-full" alt="">
                        <a href="">Tài khoản</a>
                    </div>
                    <a href="#" class="">
                        <div class="ml-[24px] relative p-0 flex items-center justify-center rounded-[8px] before:block before:h-[20px] before:absolute before:left-[-12px] before:border before:border-solid">
                            <div class="cart-wrapper flex w-[40px] h-[40px] items-center justify-center">
                                <img src="./img/cartIcon.png" alt="cart-icon" class="cart-icon w-[24px] h-[24px] mr-[4px]">
                                <span class="quantity text-white bg-sweetRed h-[16px] right-0 top-[-4px] rounded-[8px] inline-block text-center font-bold text-[10px] absolute px-[4px] py-[0.5px] leading-[150%]">0</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </header>
';
