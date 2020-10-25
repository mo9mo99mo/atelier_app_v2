<div class="footer_btn_area">
    <div>
        <a href="#">
            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 5.914L9.5 1.414L2.414 8.5H4V16.5H7V10.5H12V16.5H15V8.5H16.586L15 6.914V3.5H14V5.914ZM0 9.5L9.5 0L13 3.5V2.5H16V6.5L19 9.5H16V17.498H11V11.498H8V17.498H3V9.5H0Z" fill="#999999" />
            </svg>
            <br>ホーム
        </a>
    </div>
    <div>
        <a href="#">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.50001 4C10.7436 3.99997 11.961 4.35667 13.008 5.02777C14.0549 5.69886 14.8873 6.65619 15.4065 7.78618C15.9257 8.91616 16.1099 10.1714 15.9371 11.4029C15.7644 12.6344 15.242 13.7905 14.432 14.734L20.076 20.378L19.369 21.085L13.724 15.44C12.9279 16.1208 11.979 16.5991 10.9582 16.8342C9.93737 17.0693 8.87486 17.0542 7.86114 16.7901C6.84743 16.5261 5.91255 16.021 5.13612 15.3178C4.3597 14.6146 3.76473 13.7341 3.40189 12.7514C3.03905 11.7687 2.91909 10.7129 3.05223 9.67387C3.18536 8.63483 3.56765 7.64336 4.16654 6.7839C4.76542 5.92444 5.56315 5.22246 6.4918 4.73774C7.42044 4.25302 8.45248 3.99992 9.50001 4V4ZM9.50001 5C8.04132 5 6.64238 5.57946 5.61093 6.61091C4.57948 7.64236 4.00001 9.04131 4.00001 10.5C4.00001 11.9587 4.57948 13.3576 5.61093 14.3891C6.64238 15.4205 8.04132 16 9.50001 16C10.9587 16 12.3577 15.4205 13.3891 14.3891C14.4206 13.3576 15 11.9587 15 10.5C15 9.04131 14.4206 7.64236 13.3891 6.61091C12.3577 5.57946 10.9587 5 9.50001 5Z" fill="#999999" />
            </svg>
            <br>さがす
        </a>
    </div>
    <div>
        <!--ログイン状態で表示を切替-->
        <!-- login -->
        @auth
        <a href="{{ url('/mypage') }}"><img src="{{ Auth::user()->users_icon_path }}"><br>マイページ</a>
        @endauth
        <!-- logout -->
        @guest
        <a href="{{ url('/login') }}">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 1C6.61553 1 5.26216 1.41054 4.11101 2.17971C2.95987 2.94888 2.06266 4.04213 1.53285 5.32122C1.00303 6.6003 0.86441 8.00777 1.13451 9.36563C1.4046 10.7235 2.07129 11.9708 3.05026 12.9497C4.02922 13.9287 5.2765 14.5954 6.63437 14.8655C7.99224 15.1356 9.3997 14.997 10.6788 14.4672C11.9579 13.9373 13.0511 13.0401 13.8203 11.889C14.5895 10.7378 15 9.38447 15 8C15 6.14348 14.2625 4.36301 12.9497 3.05025C11.637 1.7375 9.85652 1 8 1V1ZM8 14C6.81332 14 5.65328 13.6481 4.66658 12.9888C3.67989 12.3295 2.91085 11.3925 2.45673 10.2961C2.0026 9.19974 1.88378 7.99334 2.11529 6.82946C2.3468 5.66557 2.91825 4.59647 3.75736 3.75736C4.59648 2.91824 5.66558 2.3468 6.82946 2.11529C7.99335 1.88378 9.19975 2.0026 10.2961 2.45672C11.3925 2.91085 12.3295 3.67988 12.9888 4.66658C13.6481 5.65327 14 6.81331 14 8C14 9.5913 13.3679 11.1174 12.2426 12.2426C11.1174 13.3679 9.5913 14 8 14Z" fill="#999999"/>
                <path d="M5.75 5.50004C5.50277 5.50004 5.2611 5.57335 5.05554 5.7107C4.84998 5.84806 4.68976 6.04328 4.59515 6.27169C4.50054 6.50009 4.47579 6.75143 4.52402 6.9939C4.57225 7.23638 4.6913 7.45911 4.86612 7.63392C5.04093 7.80874 5.26366 7.92779 5.50614 7.97602C5.74861 8.02425 5.99995 7.9995 6.22836 7.90489C6.45676 7.81028 6.65199 7.65006 6.78934 7.4445C6.92669 7.23894 7 6.99727 7 6.75004C7.00133 6.58552 6.96991 6.42237 6.90756 6.27011C6.84522 6.11786 6.75319 5.97953 6.63685 5.86319C6.52051 5.74685 6.38219 5.65482 6.22993 5.59248C6.07767 5.53013 5.91452 5.49871 5.75 5.50004V5.50004Z" fill="#999999"/>
                <path d="M10.25 5.50004C10.0028 5.50004 9.7611 5.57335 9.55554 5.7107C9.34998 5.84806 9.18976 6.04328 9.09515 6.27169C9.00054 6.50009 8.97579 6.75143 9.02402 6.9939C9.07225 7.23638 9.1913 7.45911 9.36612 7.63392C9.54093 7.80874 9.76366 7.92779 10.0061 7.97602C10.2486 8.02425 10.4999 7.9995 10.7284 7.90489C10.9568 7.81028 11.152 7.65006 11.2893 7.4445C11.4267 7.23894 11.5 6.99727 11.5 6.75004C11.5013 6.58552 11.4699 6.42237 11.4076 6.27011C11.3452 6.11786 11.2532 5.97953 11.1369 5.86319C11.0205 5.74685 10.8822 5.65482 10.7299 5.59248C10.5777 5.53013 10.4145 5.49871 10.25 5.50004V5.50004Z" fill="#999999"/>
                <path d="M8.00001 11.9999C8.6902 11.9988 9.36834 11.819 9.9685 11.4782C10.5687 11.1374 11.0704 10.6471 11.425 10.0549L10.57 9.55493C10.3032 9.99803 9.92632 10.3646 9.47602 10.6191C9.02571 10.8736 8.51725 11.0073 8.00001 11.0073C7.48277 11.0073 6.97432 10.8736 6.52401 10.6191C6.0737 10.3646 5.69684 9.99803 5.43001 9.55493L4.57501 10.0549C4.92959 10.6471 5.43136 11.1374 6.03152 11.4782C6.63169 11.819 7.30983 11.9988 8.00001 11.9999V11.9999Z" fill="#999999"/>
            </svg>
            <br>ログイン
        </a>
        @endguest
    </div>
    <div>
        <a href="{{ url('/products') }}">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.6665 17.3333V16H14.6665V8H15.9998V16H23.9998V17.3333H15.9998V25.3333H14.6665V17.3333H6.6665Z" fill="#9FD2D6"/>
            </svg>
            <br>投稿
        </a>
    </div>
</div>