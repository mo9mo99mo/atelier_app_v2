@extends('layouts.app')
@section('content')
<!-- user profile -->
<section>
    <div>
        <!--edit&update-->
        <div href="#">
            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 7.5C1.5 7.23478 1.60536 6.98043 1.79289 6.79289C1.98043 6.60536 2.23478 6.5 2.5 6.5C2.76522 6.5 3.01957 6.60536 3.20711 6.79289C3.39464 6.98043 3.5 7.23478 3.5 7.5C3.5 7.76522 3.39464 8.01957 3.20711 8.20711C3.01957 8.39464 2.76522 8.5 2.5 8.5C2.23478 8.5 1.98043 8.39464 1.79289 8.20711C1.60536 8.01957 1.5 7.76522 1.5 7.5ZM6.5 7.5C6.5 7.23478 6.60536 6.98043 6.79289 6.79289C6.98043 6.60536 7.23478 6.5 7.5 6.5C7.76522 6.5 8.01957 6.60536 8.20711 6.79289C8.39464 6.98043 8.5 7.23478 8.5 7.5C8.5 7.76522 8.39464 8.01957 8.20711 8.20711C8.01957 8.39464 7.76522 8.5 7.5 8.5C7.23478 8.5 6.98043 8.39464 6.79289 8.20711C6.60536 8.01957 6.5 7.76522 6.5 7.5ZM11.5 7.5C11.5 7.23478 11.6054 6.98043 11.7929 6.79289C11.9804 6.60536 12.2348 6.5 12.5 6.5C12.7652 6.5 13.0196 6.60536 13.2071 6.79289C13.3946 6.98043 13.5 7.23478 13.5 7.5C13.5 7.76522 13.3946 8.01957 13.2071 8.20711C13.0196 8.39464 12.7652 8.5 12.5 8.5C12.2348 8.5 11.9804 8.39464 11.7929 8.20711C11.6054 8.01957 11.5 7.76522 11.5 7.5Z" fill="#999999" />
            </svg>
        </div>
        <!--11_users.users_Icon_path-->
        <div>
            <img src="{{$user->users_icon_path}}" alt="profile_img">
        </div>
        <!--11_users.user_name-->
        <h1>{{$user->name}}</h1>



        <div>
            <!--users.users_profile_txt-->
            <div>{{$user->users_profile_txt}}</div>
            <!--users.users_website_url-->
            <div><a href="{{$user->users_website_url}}">{{$user->users_website_url}}</a></div>
            <div class="sns_icon_block">
                <!--users.users_instagram_url-->
                <div>
                    <a href="{{$user->users_instagram_url}}">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.219 6.5655C13.6654 6.5655 14.0274 6.20357 14.0274 5.75711C14.0274 5.31066 13.6654 4.94873 13.219 4.94873C12.7725 4.94873 12.4106 5.31066 12.4106 5.75711C12.4106 6.20357 12.7725 6.5655 13.219 6.5655Z" fill="#555555" />
                            <path d="M9.62275 5.89429C8.93859 5.89429 8.26978 6.09717 7.70092 6.47727C7.13206 6.85737 6.68868 7.39763 6.42686 8.02971C6.16504 8.6618 6.09654 9.35733 6.23001 10.0284C6.36349 10.6994 6.69294 11.3157 7.17672 11.7995C7.6605 12.2833 8.27687 12.6128 8.94789 12.7462C9.61891 12.8797 10.3144 12.8112 10.9465 12.5494C11.5786 12.2876 12.1189 11.8442 12.499 11.2753C12.8791 10.7065 13.082 10.0377 13.082 9.35349C13.082 8.43606 12.7175 7.55619 12.0688 6.90747C11.4201 6.25874 10.5402 5.89429 9.62275 5.89429ZM9.62275 11.599C9.17863 11.599 8.74449 11.4673 8.37521 11.2206C8.00594 10.9738 7.71813 10.6231 7.54817 10.2128C7.37821 9.8025 7.33375 9.351 7.42039 8.91542C7.50703 8.47983 7.7209 8.07972 8.03494 7.76568C8.34898 7.45164 8.74909 7.23777 9.18467 7.15113C9.62026 7.06449 10.0718 7.10896 10.4821 7.27891C10.8924 7.44887 11.2431 7.73668 11.4898 8.10596C11.7366 8.47523 11.8683 8.90937 11.8683 9.35349C11.8683 9.94904 11.6317 10.5202 11.2106 10.9413C10.7895 11.3624 10.2183 11.599 9.62275 11.599Z" fill="#555555" />
                            <path d="M9.62279 3.83064C11.4214 3.83064 11.6348 3.83738 12.3449 3.86994C12.772 3.87501 13.1951 3.95343 13.5957 4.10179C13.8863 4.21389 14.1502 4.38559 14.3704 4.60583C14.5907 4.82608 14.7624 5.09 14.8745 5.3806C15.0228 5.78116 15.1012 6.20423 15.1063 6.63135C15.1389 7.34149 15.1456 7.55482 15.1456 9.35403C15.1456 11.1532 15.1389 11.3654 15.1063 12.0756C15.1012 12.5027 15.0228 12.9258 14.8745 13.3263C14.7624 13.6169 14.5907 13.8809 14.3704 14.1011C14.1502 14.3214 13.8863 14.4931 13.5957 14.6052C13.1951 14.7535 12.772 14.8319 12.3449 14.837C11.6348 14.8696 11.4214 14.8763 9.62279 14.8763C7.82414 14.8763 7.61081 14.8696 6.90067 14.837C6.47355 14.8319 6.05048 14.7535 5.64992 14.6052C5.35932 14.4931 5.0954 14.3214 4.87515 14.1011C4.65491 13.8809 4.48321 13.6169 4.3711 13.3263C4.22275 12.9258 4.14433 12.5027 4.13925 12.0756C4.1067 11.3654 4.09996 11.1521 4.09996 9.35347C4.09996 7.55482 4.1067 7.34149 4.13925 6.63135C4.14433 6.20423 4.22275 5.78116 4.3711 5.3806C4.48321 5.09 4.65491 4.82608 4.87515 4.60583C5.0954 4.38559 5.35932 4.21389 5.64992 4.10179C6.05048 3.95343 6.47355 3.87501 6.90067 3.86994C7.61081 3.83738 7.82414 3.83064 9.62279 3.83064ZM9.62279 2.61694C7.79326 2.61694 7.56366 2.6248 6.84509 2.65736C6.2864 2.66864 5.73365 2.77456 5.21036 2.97061C4.76279 3.14368 4.35632 3.40836 4.017 3.74768C3.67768 4.087 3.413 4.49347 3.23993 4.94105C3.04382 5.46451 2.9379 6.01745 2.92668 6.57634C2.89412 7.2949 2.88626 7.52338 2.88626 9.35347C2.88626 11.1836 2.89412 11.4126 2.92668 12.1312C2.93796 12.6899 3.04388 13.2426 3.23993 13.7659C3.413 14.2135 3.67768 14.6199 4.017 14.9593C4.35632 15.2986 4.76279 15.5633 5.21036 15.7363C5.73383 15.9324 6.28677 16.0384 6.84565 16.0496C7.56422 16.0821 7.79326 16.09 9.62279 16.09C11.4523 16.09 11.6819 16.0821 12.4005 16.0496C12.9594 16.0384 13.5123 15.9324 14.0358 15.7363C14.4833 15.5633 14.8898 15.2986 15.2291 14.9593C15.5685 14.6199 15.8331 14.2135 16.0062 13.7659C16.2021 13.2424 16.3079 12.6895 16.3189 12.1306C16.3515 11.412 16.3593 11.1836 16.3593 9.35347C16.3593 7.52338 16.3515 7.29434 16.3189 6.57578C16.3076 6.01708 16.2017 5.46434 16.0056 4.94105C15.8326 4.49347 15.5679 4.087 15.2286 3.74768C14.8893 3.40836 14.4828 3.14368 14.0352 2.97061C13.5117 2.77469 12.9588 2.66896 12.3999 2.65792C11.6814 2.62424 11.4529 2.61694 9.62279 2.61694Z" fill="#555555" />
                        </svg>
                    </a>
                </div>
                <!--users.users_facebook_url-->
                <div>
                    <a href="{{$user->users_facebook_url}}">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.32413 1.86987C5.19089 1.86987 1.83984 5.22092 1.83984 9.35415C1.83984 13.0892 4.57637 16.185 8.15496 16.7486V11.5181H6.25377V9.35415H8.15496V7.7052C8.15496 5.82796 9.27248 4.79278 10.9813 4.79278C11.8002 4.79278 12.658 4.93874 12.658 4.93874V6.7793H11.7118C10.7837 6.7793 10.4933 7.35715 10.4933 7.94921V9.35266H12.5674L12.2358 11.5166H10.4933V16.7471C14.0719 16.1865 16.8084 13.0899 16.8084 9.35415C16.8084 5.22092 13.4574 1.86987 9.32413 1.86987Z" fill="#555555" />
                        </svg>
                    </a>
                </div>
                <!--users.users_twitter_url-->
                <div>
                    <a href="{{$user->users_twitter_url}}">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.7373 6.35718C14.747 6.48817 14.747 6.61841 14.747 6.74865C14.747 10.7344 11.7133 15.3272 6.16918 15.3272C4.4611 15.3272 2.87427 14.8325 1.53894 13.9732C1.78146 14.0009 2.01499 14.0106 2.26723 14.0106C3.62426 14.0139 4.94287 13.5601 6.0105 12.7225C5.38132 12.7111 4.77141 12.5035 4.26592 12.1287C3.76042 11.7539 3.38459 11.2306 3.19089 10.6319C3.37726 10.6596 3.56439 10.6783 3.7605 10.6783C4.03071 10.6783 4.30241 10.6409 4.55466 10.5757C3.87184 10.4379 3.25786 10.0678 2.8171 9.52836C2.37634 8.98894 2.13602 8.31351 2.13699 7.61691V7.57949C2.53894 7.80329 3.00526 7.94326 3.49927 7.96197C3.08541 7.68696 2.74607 7.31379 2.5115 6.87574C2.27693 6.43769 2.15444 5.94839 2.15496 5.4515C2.15496 4.89162 2.30391 4.37814 2.56514 3.93054C3.32273 4.86244 4.26761 5.62482 5.33859 6.16831C6.40958 6.71179 7.58277 7.02426 8.7822 7.08548C8.7358 6.86093 8.70735 6.62814 8.70735 6.39461C8.70716 5.99862 8.78501 5.60648 8.93645 5.2406C9.0879 4.87472 9.30997 4.54227 9.58998 4.26226C9.86998 3.98226 10.2024 3.76019 10.5683 3.60874C10.9342 3.45729 11.3263 3.37944 11.7223 3.37964C12.5906 3.37964 13.3743 3.74341 13.9252 4.33173C14.6001 4.20121 15.2474 3.95481 15.8383 3.60344C15.6134 4.30016 15.1421 4.89094 14.5127 5.26512C15.1114 5.19684 15.6965 5.03941 16.2485 4.79805C15.8362 5.39917 15.3253 5.9263 14.7373 6.35718Z" fill="#555555" />
                        </svg>
                    </a>
                </div>
                <!--users.users_youtube_url-->
                <div>
                    <a href="{{$user->users_youtube_url}}">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.9049 5.76273C16.8196 5.44641 16.653 5.15794 16.4216 4.92603C16.1903 4.69411 15.9022 4.52684 15.586 4.44087C14.4139 4.11901 9.72451 4.11378 9.72451 4.11378C9.72451 4.11378 5.03589 4.10854 3.86299 4.41617C3.54706 4.5061 3.25956 4.67573 3.02808 4.90879C2.7966 5.14184 2.62892 5.43048 2.54113 5.74701C2.232 6.91916 2.22901 9.3503 2.22901 9.3503C2.22901 9.3503 2.22601 11.7934 2.5329 12.9536C2.70505 13.5951 3.21029 14.1018 3.85251 14.2747C5.03664 14.5966 9.71329 14.6018 9.71329 14.6018C9.71329 14.6018 14.4027 14.607 15.5748 14.3002C15.8911 14.2143 16.1794 14.0474 16.4114 13.816C16.6433 13.5846 16.8109 13.2966 16.8974 12.9805C17.2073 11.8091 17.2095 9.37875 17.2095 9.37875C17.2095 9.37875 17.2245 6.93488 16.9049 5.76273ZM8.22451 11.6025L8.22826 7.11153L12.1257 9.36078L8.22451 11.6025Z" fill="#555555" />
                        </svg>
                    </a>
                </div>
            </div>
            <!-- /sns_icon_block -->
            <div>
                所属カテゴリ1, 所属カテゴリ2
            </div>
        </div>
    </div>
</section><!-- /user profile -->

<section>
    <h2><span>Now Making</span>　ただいま制作中</h2>
    <!-- 工程が追加された作品を表示（foreachする）-->
    <div class="posts_product">
        <!-- products img-->
        <div>
            <!-- 作品工程（詳細）ページへ遷移-->
            {{--<a href="{{ route('products.show', [ $product->id ]) }}">--}}
                <!--工程画像 posts_img-->
                <img src=""></img>
            </a>
        </div>
        <div>
            <!-- 作品工程（詳細）ページへ遷移-->
            <a href="#">
                <!--作品名 products.product_name-->
                {{--<h2>{{ $products->product_name }}</h2>--}}
            </a>
        </div>
        <div>
            <!-- 作品説明 21_products.product_cap -->
            <p>作品の説明などテキスト作品の説明などテキスト作品の説明などテキスト作品の説明などテキスト作品の説明などテキスト</p>
        </div>
        <div class="like_count">
            <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.12177 6.34947C1.9076 6.13524 1.7417 5.87769 1.63521 5.5941C1.52871 5.31051 1.48409 5.00742 1.50431 4.70517C1.52454 4.40292 1.60916 4.10848 1.75249 3.84161C1.89582 3.57474 2.09456 3.34159 2.33537 3.15781C2.57618 2.97403 2.8535 2.84386 3.14874 2.77603C3.44397 2.70819 3.7503 2.70427 4.04718 2.76451C4.34406 2.82476 4.62462 2.94778 4.87006 3.12533C5.11551 3.30288 5.32015 3.53086 5.47027 3.79397H6.02927C6.1794 3.53086 6.38404 3.30288 6.62948 3.12533C6.87492 2.94778 7.15549 2.82476 7.45237 2.76451C7.74924 2.70427 8.05557 2.70819 8.35081 2.77603C8.64604 2.84386 8.92337 2.97403 9.16418 3.15781C9.40499 3.34159 9.60372 3.57474 9.74706 3.84161C9.89039 4.10848 9.97501 4.40292 9.99523 4.70517C10.0155 5.00742 9.97083 5.31051 9.86434 5.5941C9.75784 5.87769 9.59195 6.13524 9.37777 6.34947L5.74977 9.97847L2.12177 6.34997V6.34947ZM9.73077 6.70447C9.98684 6.44838 10.1872 6.14208 10.3191 5.80482C10.4511 5.46757 10.5118 5.10665 10.4975 4.74479C10.4832 4.38292 10.3942 4.02792 10.2361 3.70212C10.0779 3.37633 9.85406 3.08677 9.57859 2.85168C9.30312 2.61659 8.98199 2.44104 8.63538 2.33607C8.28878 2.2311 7.9242 2.19899 7.56459 2.24175C7.20497 2.28452 6.85809 2.40123 6.54577 2.58455C6.23344 2.76787 5.96243 3.01383 5.74977 3.30697C5.53712 3.01383 5.2661 2.76787 4.95378 2.58455C4.64146 2.40123 4.29458 2.28452 3.93496 2.24175C3.57534 2.19899 3.21077 2.2311 2.86416 2.33607C2.51756 2.44104 2.19642 2.61659 1.92095 2.85168C1.64548 3.08677 1.42164 3.37633 1.2635 3.70212C1.10535 4.02792 1.01634 4.38292 1.00205 4.74479C0.987752 5.10665 1.04849 5.46757 1.18044 5.80482C1.31239 6.14208 1.5127 6.44838 1.76877 6.70447L5.74977 10.685L9.73077 6.70497V6.70447Z" fill="#999999" />
            </svg>
            <p>24</p>
        </div>
    </div>
    <!-- /posts_product -->
</section>
<section>
    <h2><span>Works</span>　他の制作工程を見る</h2>
    <!-- 工程が追加された作品を表示（foreachする）-->
    @foreach ($products as $product)
    <div class="posts_product">
        <!-- products img-->
        <div>
            <!-- 作品工程（詳細）ページへ遷移-->
                <!--工程画像 posts_img -->
                @if(isset( $product->posts[0]->posts_img_path ))
                <img src="{{ $product->posts[0]->posts_img_path }}" class="posts_img">
                @endif
        </div>
        <div>
            <!-- 作品工程（詳細）ページへ遷移-->
            <a href="{{ route('products.show', [ $product->id ]) }}">
                <!--作品名/products.product_name-->
                <h2>{{ $product->product_name }}</h2>
            </a>
        </div>
        <!-- user info -->
        <div>
            <!-- ユーザーページへ遷移-->
            <a href="{{ url('/mypage') }}">
                <!--11_users.users_Icon_path-->
                <div>
                    <img src="{{ $product->user->users_icon_path }}" alt="profile_img" class="img_crop_circle">
                </div>
                <!--11_users.user_name-->
                <h3>{{ $product->user->name }}</h3>
            </a>
        </div>
        <div>
            <!-- 作品説明 21_products.product_cap -->
            <p>作品の説明などテキスト作品の説明などテキスト作品の説明などテキスト作品の説明などテキスト作品の説明などテキスト</p>
        </div>
        <div class="like_count">
            <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.12177 6.34947C1.9076 6.13524 1.7417 5.87769 1.63521 5.5941C1.52871 5.31051 1.48409 5.00742 1.50431 4.70517C1.52454 4.40292 1.60916 4.10848 1.75249 3.84161C1.89582 3.57474 2.09456 3.34159 2.33537 3.15781C2.57618 2.97403 2.8535 2.84386 3.14874 2.77603C3.44397 2.70819 3.7503 2.70427 4.04718 2.76451C4.34406 2.82476 4.62462 2.94778 4.87006 3.12533C5.11551 3.30288 5.32015 3.53086 5.47027 3.79397H6.02927C6.1794 3.53086 6.38404 3.30288 6.62948 3.12533C6.87492 2.94778 7.15549 2.82476 7.45237 2.76451C7.74924 2.70427 8.05557 2.70819 8.35081 2.77603C8.64604 2.84386 8.92337 2.97403 9.16418 3.15781C9.40499 3.34159 9.60372 3.57474 9.74706 3.84161C9.89039 4.10848 9.97501 4.40292 9.99523 4.70517C10.0155 5.00742 9.97083 5.31051 9.86434 5.5941C9.75784 5.87769 9.59195 6.13524 9.37777 6.34947L5.74977 9.97847L2.12177 6.34997V6.34947ZM9.73077 6.70447C9.98684 6.44838 10.1872 6.14208 10.3191 5.80482C10.4511 5.46757 10.5118 5.10665 10.4975 4.74479C10.4832 4.38292 10.3942 4.02792 10.2361 3.70212C10.0779 3.37633 9.85406 3.08677 9.57859 2.85168C9.30312 2.61659 8.98199 2.44104 8.63538 2.33607C8.28878 2.2311 7.9242 2.19899 7.56459 2.24175C7.20497 2.28452 6.85809 2.40123 6.54577 2.58455C6.23344 2.76787 5.96243 3.01383 5.74977 3.30697C5.53712 3.01383 5.2661 2.76787 4.95378 2.58455C4.64146 2.40123 4.29458 2.28452 3.93496 2.24175C3.57534 2.19899 3.21077 2.2311 2.86416 2.33607C2.51756 2.44104 2.19642 2.61659 1.92095 2.85168C1.64548 3.08677 1.42164 3.37633 1.2635 3.70212C1.10535 4.02792 1.01634 4.38292 1.00205 4.74479C0.987752 5.10665 1.04849 5.46757 1.18044 5.80482C1.31239 6.14208 1.5127 6.44838 1.76877 6.70447L5.74977 10.685L9.73077 6.70497V6.70447Z" fill="#999999" />
            </svg>
            <p>24</p>
        </div>
    </div>
    @endforeach
    <!-- /posts_product -->

</section>
@endsection