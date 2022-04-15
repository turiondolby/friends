<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Staudenmeir\LaravelMergedRelations\Facades\Schema;


class CreateFriendsView extends Migration
{
    public function up()
    {
        Schema::createMergeView(
            'friends_view',
            [(new User)->acceptedFriendsTo(), (new User())->acceptedFriendsFrom()]
        );
    }

    public function down()
    {
        Schema::dropView('friends_view');
    }
}
