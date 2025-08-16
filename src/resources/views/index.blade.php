@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="todo__alert">
  <div class="todo__alert--success">Todoを作成しました</div>
  <!-- <div class="todo__alert--danger">
        <ul>
          <li>Todoを入力してください</li>
        </ul>
      </div> -->
</div>

<div class="todo__content">
  <div class="section__title">
    <h2>新規作成</h2>
  </div>
  <form class="create-form" action="">
    <div class="create-form__item">
      <input class="create-form__item-input" type="text" />
      <select class="create-form__item-select" name="" id="">
        <option value="">カテゴリ</option>
      </select>
    </div>
    <div class="create-form__button">
      <button class="create-form__button-submit" type="submit">作成</button>
    </div>
  </form>

  <div class="section__title">
    <h2>Todo検索</h2>
  </div>
  <form class="search-form" action="">
    <div class="search-form__item">
      <input class="search-form__item-input" type="text" />
      <select class="search-form__item-select" name="" id="">
        <option value="">カテゴリ</option>
      </select>
    </div>
    <div class="search-form__button">
      <button class="search-form__button-submit" type="submit">作成</button>
    </div>
  </form>

  <div class="todo-table">
    <table class="todo-table__inner">
      <tr class="todo-table__row">
        <th class="todo-table__header">
          <span class="todo-table__header--span">Todo</span>
          <span class="todo-table__header--span">カテゴリ</span>
        </th>
      </tr>
      <tr class="todo-table__row">
        <td class="todo-table__item">
          <form class="update-form" action="">
            <div class="update-form__item">
              <input class="update-form__item-input" type="text" value="test 1" />
            </div>
            <div class="update-form__item">
              <p class="update-form__item-p">category2</p>
            </div>
            <div class="update-form__button">
              <button class="update-form__button-submit" type="submit">更新</button>
            </div>
          </form>
        </td>
        <td class="todo-table__item">
          <form class="delete-form" action="">
            <div class="delete-form__button">
              <button class="delete-form__button-submit">削除</button>
            </div>
          </form>
        </td>
      </tr>
    </table>
  </div>
</div>
@endsection