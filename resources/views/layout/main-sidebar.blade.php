<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">

        {{--header--}}

    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround"
                         src="{{ URL::asset('assets/img/faces/6.jpg') }}"><span
                            class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">

                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="side-item side-item-category"> اهلا  {{ auth()->user()->name}}</li>


            <li class="side-item side-item-category">قسم المنتجات</li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/') }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3" />
                        <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z" />
                    </svg><span class="side-menu__label">قسم المنتجات</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">


                    <li><a class="slide-item" href="">اضافه منتج جديد</a></li>
                    <li><a class="slide-item" href="">عرض المنتجات</a></li>


                </ul>
            </li>




            <li class="side-item side-item-category">قسم العملاء</li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/') }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3" />
                        <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z" />
                    </svg><span class="side-menu__label">قسم العملاء</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">


                    <li><a class="slide-item" href="">اضافه عميل</a></li>
                    <li><a class="slide-item" href="">عرض العملاء</a></li>


                </ul>
            </li>




            <li class="side-item side-item-category">قسم الفواتير</li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/') }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3" />
                        <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z" />
                    </svg><span class="side-menu__label">قسم الفواتير</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">


                    <li><a class="slide-item" href="">اضافه فاتوره</a></li>
                    <li><a class="slide-item" href="">عرض الفواتير</a></li>


                </ul>
            </li>


        </ul>
    </div>
</aside>
<!-- main-sidebar -->
{{--finish all --}}