<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="./modules/モジュール用CSS/search_box.css">
    <link rel="stylesheet" href="./modules/モジュール用CSS/navigation.css">
    <link rel="stylesheet" href="./style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require 'modules/serach_box.php'; ?>
<h1 class="page_title">レビューの作成</h1>

<div id="app" class="star_div">
    <span class="review">評価</span><star-rating @rating-selected ="setRating" :increment="0.5" :max-rating="3" :star-size="45" :show-rating="false"></star-rating>
    <input type="hidden" name="score" :value="this.rating" />
</div>

<textarea class="review_text" name="review-content" cols="30" rows="10"></textarea>
<button class="centered_button" style="right: 32px;" >送信</button>
<?php require 'modules/navigation.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/vue@3.2/dist/vue.global.js"></script>
    <script src="https://unpkg.com/vue-star-rating@next/dist/VueStarRating.umd.min.js"></script>
    <script src="./scripts/post_review.js"></script>
<?php require 'modules/footer.php'; ?>