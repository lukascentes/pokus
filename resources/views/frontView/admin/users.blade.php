<?php

?>

<table>
    @foreach($users as $user)
        <tr>
            <td>
                {{$user->first_name}} {{$user->last_name}}
            </td>
            <td>
                {{$user->user_name}}
            </td>
            <td>
                {{$user->email}}
            </td>
            <td>
                {{$user->admin}}
            </td>
            <td>
                <a href="{{action ("UserController@showAction",['id' => $user->id])}}">Editovat</a>
            </td>
            <td>
            <a href="{{action ("UserController@deleteAction",['id' => $user->id])}}">Zmazať</a>
            </td>

        </tr>
    @endforeach
</table>