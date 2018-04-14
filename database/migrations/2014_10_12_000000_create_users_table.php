<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');   //一个int型的自增长id
            $table->string('name'); //用户名
            $table->string('email')->unique();  //用户邮箱（唯一）
            $table->string('password',60);  //用户密码（最大长度60）
            $table->rememberToken();    // 『记住我』 相关信息
            $table->timestamps();   //创建了create_at/update_at字段（用户创建时间/用户更新时间）
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
