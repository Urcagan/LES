<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Complex extends Model
{
    use HasFactory;
    use SoftDeletes;    // Подключаем реализацию мягкого удаления данных из таблицы
                        // Этот параметр подключается индивидуально в каждой моделе
                        // Так же в миграции таблици необходимо добавить столбец " $table->softDeletes(); "

    protected $table = 'Complexes'; // Параметр указывающий какая таблица связана с этой моделью.
                                    // Параметр необязательный, но лучще принудительно указывать.

    protected $guarded = [];        // Строка разрешающая запись данных в таблицу (Защита от записи в фреймворке Laravel)
                                    // Должна быть в каждой моделе в которую осуществляется запись данных.
                                    // Этот способ разрешает записывать все атрибуты

//    protected $fillable = ['NameComple','Description']; // Этот способ разрешает запись только перечисленных атрибутов таблицы

    public $timestamps = false;     // Отключаем в моделе автоматическую обработку полей created_at и updated_at.
                                    // Обязательно если в таблице данных полей нет.
}

