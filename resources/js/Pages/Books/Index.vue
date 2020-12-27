<template>
    <app-layout>
        <br class="main-content">
            <div class="header">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="row align-items-end">
                            <div class="col">
                                <h6 class="header-pretitle">
                                    список
                                </h6>
                                <h1 class="header-title">
                                    Книги
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col"><h4 class="card-header-title">
                                                Книги
                                            </h4></div>
                                            <div class="col-auto"><a
                                                :href="route('books.create')"
                                                class="btn btn-primary lift">
                                                Добавить
                                            </a></div>
                                        </div>
                                    </div>
                                    <div
                                        data-list="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}"
                                        class="table-responsive mb-0">
                                        <div>
                                            <vue-good-table
                                                :columns="columns"
                                                :rows="rows"
                                                :fixed-header="false"
                                                :line-numbers="true"
                                                :sort-options="{
                                                    enabled: true
                                                }"
                                                :search-options="{
                                                    enabled: true,
                                                    skipDiacritics: true,
                                                    placeholder: 'Поиск',
                                                }"
                                                :pagination-options="{
                                                    enabled: true,
                                                    mode: 'pages',
                                                    perPage: 10,
                                                    perPageDropdown: [10, 20, 30, 50],
                                                    position: 'bottom',
                                                    dropdownAllowAll: true,
                                                    setCurrentPage: 1,
                                                    nextLabel: 'след',
                                                    prevLabel: 'пред',
                                                    rowsPerPageLabel: 'Строк на странице',
                                                    ofLabel: 'из',
                                                    pageLabel: 'страница', // for 'pages' mode
                                                    allLabel: 'Все',
                                                  }">
                                                <div slot="emptystate">
                                                    Нет записей
                                                </div>
                                                <template slot="table-row" slot-scope="props">
                                                    <!--                                                    <span v-if="props.column.field == 'image'">-->
                                                    <!--                                                        <img class="rounded" height="50" width="50" :src="'/storage/'+props.row.image.fileName">-->
                                                    <!--                                                    </span>-->
                                                    <span v-if="props.column.field == 'genres'">
                                                        {{ getTitles(props.row.genres) }}
                                                    </span>
                                                    <span v-else-if="props.column.field == 'actions'">
                                                        <a :href="'/books/'+props.row.id+'/edit'" title="Редактировать"
                                                           class="badge badge-warning">
                                                            <i class="fe fe-edit"></i>
                                                        </a>
                                                        <button title="Удалить" class="btn badge badge-danger"
                                                                @click="delete_record(props.row.id)">
                                                            <i class="fe fe-trash"></i>
                                                        </button>
                                                    </span>
                                                </template>
                                            </vue-good-table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            Всего книг: {{ books.length }} <br />
            Всего авторов: {{ books.map(item => item.author).filter((value, index, self) => self.indexOf(value) === index).length }}
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import axios from "axios";

export default {
    components: {
        AppLayout
    },
    props: {
        books: Array
    },
    name: 'my-component',
    data() {
        return {
            columns: [
                {
                    label: 'Название',
                    field: 'title',
                    sortable: false,
                },
                {
                    label: 'Автор',
                    field: 'author',
                    type: 'string',
                },
                {
                    label: 'Жанры',
                    field: 'genres',
                    type: 'array',
                },
                {
                    label: 'Действия',
                    field: 'actions',
                    sortable: false,
                }
            ],
            rows: this.books,
        };
    },
    methods: {
        delete_record: function (id) {
            if (confirm('Восстановление невозможно! Вы уверены что хотите удалить запись?'))
                axios.delete(route("books.destroy", id))
                    .then(
                        (response) => {
                            const index = this.books.map(book => book.id).indexOf(id);
                            this.books.splice(index, 1);
                        },
                        (error) => {
                            console.log(error)
                        }
                    )
        },
        getTitles: function (ar) {
            let fld=''

            ar.forEach((value, index) => {fld+=value.title+', '})

            return fld
        }

    }
};
</script>
