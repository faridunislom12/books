<template>



        <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="/">
                    <img src="/images/logotype.png" class="navbar-brand-img mx-auto" alt="Logo">
                </a>

                <div class="navbar-user d-md-none">
                    <div class="dropdown">
                        <a href="#!" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown">
                            <div class="avatar avatar-sm avatar-online">
                                <img src="/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="Logo">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                            <a href="#!" class="dropdown-item">!Профиль</a>
                            <a href="/account-general" class="dropdown-item">Настройки</a>
                            <hr class="dropdown-divider">
                            <a href="/logout" class="dropdown-item">Выйти</a>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <form class="mt-4 mb-3 d-md-none">
                        <div class="input-group input-group-rounded input-group-merge">
                            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Поиск по админке...">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><span class="fe fe-search"></span></div>
                            </div>
                        </div>
                    </form>





                    <!-- User (md) -->
                    <!--                <div class="navbar-user d-none d-md-flex" id="sidebarUser">-->

                    <!--                    &lt;!&ndash; Icon &ndash;&gt;-->
                    <!--                    <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">-->
                    <!--              <span class="icon">-->
                    <!--                <i class="fe fe-bell"></i>-->
                    <!--              </span>-->
                    <!--                    </a>-->

                    <!--                    &lt;!&ndash; Dropup &ndash;&gt;-->
                    <!--                    <div class="dropup">-->

                    <!--                        &lt;!&ndash; Toggle &ndash;&gt;-->
                    <!--                        <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                    <!--                            <div class="avatar avatar-sm avatar-online">-->
                    <!--                                <img src="/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">-->
                    <!--                            </div>-->
                    <!--                        </a>-->

                    <!--                        &lt;!&ndash; Menu &ndash;&gt;-->
                    <!--                        <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">-->
                    <!--                            <a href="/profile-posts.html" class="dropdown-item">Профиль</a>-->
                    <!--                            <a href="/account-general" class="dropdown-item">Настройки</a>-->
                    <!--                            <hr class="dropdown-divider">-->
                    <!--                            <a href="/logout" class="dropdown-item">Выйти</a>-->
                    <!--                        </div>-->

                    <!--                    </div>-->

                    <!--                    &lt;!&ndash; Icon &ndash;&gt;-->
                    <!--                    <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">-->
                    <!--              <span class="icon">-->
                    <!--                <i class="fe fe-search"></i>-->
                    <!--              </span>-->
                    <!--                    </a>-->

                    <!--                </div>-->





                    <hr class="navbar-divider my-3">

                    <h6 class="navbar-heading">Страницы</h6>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/books">
                                <i class="fe fe-list"></i> Книги
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/authors">
                                <i class="fe fe-list"></i> Авторы
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/genres">
                                <i class="fe fe-list"></i> Жанры
                            </a>
                        </li>
                    </ul>




                </div>



                <div id="sidebarUser" class="navbar-user d-none d-md-flex"><div class="dropup"><a href="#" id="sidebarIconCopy" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle"><div class="avatar avatar-sm avatar-online"><img src="/images/avatar.png" alt="..." class="avatar-img rounded-circle"></div></a> <div aria-labelledby="sidebarIconCopy" class="dropdown-menu"><a href="#" onclick="alert('Страница находится на стадии разработки');" class="dropdown-item">Профиль</a> <hr class="dropdown-divider"> <a href="/logout" class="dropdown-item">Выйти</a></div></div></div>





            </div>
        </nav>








</template>



<script>


export default {
    components: {
    },

    data() {
        return {}
    },

    methods: {}
}
</script>
