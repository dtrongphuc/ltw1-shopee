@extends('../layouts/master', ['title' => 'Tìm kiếm'])
    @section('body')
    @parent
        <main class="main main-home">
            <div class="container p-6">
               
            </div>
            
        <!-- Phân trang -->
        <div class="shopee-page-controller" >
            <button class="shopee-icon-button shopee-icon-button--left " >
                <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon icon-arrow-left">
                    <g>
                        <path d="m8.5 11c-.1 0-.2 0-.3-.1l-6-5c-.1-.1-.2-.3-.2-.4s.1-.3.2-.4l6-5c .2-.2.5-.1.7.1s.1.5-.1.7l-5.5 4.6 5.5 4.6c.2.2.2.5.1.7-.1.1-.3.2-.4.2z">
                        </path>
                    </g>
                </svg>
            </button>
            <button class="shopee-button-solid shopee-button-solid--primary ">1</button>
            <button class="shopee-button-no-outline">2</button>
            <button class="shopee-button-no-outline">3</button>
            <button class="shopee-button-no-outline">4</button>
            <button class="shopee-button-no-outline">5</button>
            <button class="shopee-button-no-outline shopee-button-no-outline--non-click">...</button>
            <button class="shopee-icon-button shopee-icon-button--right ">
                <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon icon-arrow-right">
                    <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z">
                    </path>
                </svg>
            </button>
        </div>
    </main>
@stop