<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Controllers\DateTime;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function updateNews(){
        $news = file_get_contents('https://api.vk.com/method/wall.get?owner_id=-152312805&count=10&access_token=0c6bbd1505055977415645055e681844c85618e135033221803cb8d3cf3c472cdec8c98445d2d15ba60cf&v=5.131');
        $news = json_decode($news, true)['response']['items'];
        $new = $news['2'];
        echo '<pre>';
        foreach($news as $key => $new) {
            $newNews = new News();
            $newNews->vk_id = $new['id'];
            $date = date_create();
            date_timestamp_set($date, intval($new['date']));
            $date = date_format($date, 'Y-m-d H:i:s');
            $newNews->date = $date;
            $text = $new['text'];
            $newNews->text = $text;
            if ($text == '') {
                if (!isset($new['attachments'][0]['link'])) {
                    continue;
                }
                $newNews->text = $new['attachments'][0]['link']['title'];
                $newNews->article = $new['attachments'][0]['link']['url'];
                $newNews->type = 'article';
            } else {
                $newNews->article = '';
                $newNews->type = 'post';
            }
            if (isset($new['attachments'])) {
                if ($new['attachments'][0]['type'] == 'photo') {
                    $newNews->photo = end($new['attachments'][0]['photo']['sizes'])['url'];
                }
                if ($new['attachments'][0]['type'] == 'link') {
                    $newNews->photo = end($new['attachments'][0]['link']['photo']['sizes'])['url'];
                }
                if ($new['attachments'][0]['type'] == 'video') {
                    $newNews->photo = end($new['attachments'][0]['video']['image'])['url'];
                }
            } else {
                $newNews->photo = '';
            }
            $newNews->save();
        }
    }

    public function allNews() {
        $news = new News;
        
        return view('news', ['data' => $news->orderBy('created_at', 'desc')->paginate(3), 'count' => ceil($news->count() / 3)]);
    }
}
