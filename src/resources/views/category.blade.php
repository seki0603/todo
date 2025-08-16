@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('category.css') }}" />
@endsection

@section('content')
<div class="category__alert">
  <div class="category__alert--success">カテゴリを削除しました</div>
  <!-- <div class="category__alert--danger">
          <ul>
            <li>Todoを入力してください</li>
          </ul>
        </div> -->
</div>

<div class="category__content">
  <form class="create-form" action="">
    <div class="create-form__item">
      <input class="create-form__item-input" type="text" />
    </div>
    <div class="create-form__button">
      <button class="create-form__button-submit" type="submit">
        作成
      </button>
    </div>
  </form>

  <div class="category-table">
    <table class="category-table__inner">
      <tr class="category-table__row">
        <th class="category-table__header">Category</th>
      </tr>
      <tr class="category-table__row">
        <td class="category-table__item">
          <form class="update-form" action="">
            <div class="update-form__item">
              <input class="update-form__item-input" type="text" value="category 1" />
            </div>
            <div class="update-form__button">
              <button class="update-form__button-submit" type="submit">
                更新
              </button>
            </div>
          </form>
        </td>
        <td class="category-table__item">
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