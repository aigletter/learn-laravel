<?php

namespace App\Http\Controllers;

// CRUD - Create, Read, Update, Delete

class CategoryController extends Controller
{
    /**
     * Вывод списка сущностей
     * @return string
     */
    public function index()
    {
        //$url = config('app.url') . '/categories/1/show';
        //$url = route('hello');
        $url = route('categories.show', ['id' => 1]);
        $link = '<a href="' . $url . '">Category 1</a>';

        return 'Список категорий<br>' . $link;
    }

    /**
     * Просмотр конкретной сущности
     * @param int $id
     * @return string
     */
    public function show(int $id)
    {
        return 'Вывод категории с id: ' . $id;
    }

    /**
     * Удаление сущности
     * @param int $id
     * @return string
     */
    public function delete(int $id)
    {
        return 'Удаление категории c id: ' . $id;
    }

    /**
     * Вывод формы создания сущности
     * @return string
     */
    public function create()
    {
        return 'Вывод формы создания сущности';
    }

    /**
     * Добавление сущности в хранилищ
     * @return string
     */
    public function store()
    {
        return 'Добавление сущности в хранилище';
    }

    /**
     * Вывод формы редактирования конкретно сущности
     * @param int $id
     * @return void
     */
    public function edit(int $id)
    {

    }

    /**
     * Изменение конкретной сущности в хранилище
     * @param int $id
     * @return void
     */
    public function update(int $id)
    {

    }














    /*public function something()
    {
        return 'Something';
    }

    public function anything()
    {
        return 'Anything';
    }*/
}
