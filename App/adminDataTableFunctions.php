<?php
return [
    'id' => function($model) {
        return $model->id;
    },
    'title' => function($model) {
        return $model->title;
    },
    'content' => function($model) {
        return $model->content;
    },
    'author' => function($model) {
        return $model->author->name;
    }
];