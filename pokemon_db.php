<?php
	
	class pokemonDeck {
	
		//protected $cards = [];
		//protected $groups = [];
		
		//187
		//153
	
		public function __construct() {
			$this->cards = array(
		    array(
			    "id" => 1,
		        "kana"=> "フ",
		        "name_katakana"=> "フシギダネ",
				"name_hiragana"=> "ふしぎだね",
				"type1"=> "くさ",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 2,
		        "kana"=> "フ",
		        "name_katakana"=> "フシギソウ",
				"name_hiragana"=> "ふしぎんう",
				"type1"=> "くさ",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 3,
		        "kana"=> "フ",
		        "name_katakana"=> "フシギバナ",
				"name_hiragana"=> "ふしぎばな",
				"type1"=> "くさ",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 4,
		        "kana"=> "ヒ",
		        "name_katakana"=> "ヒトカゲ",
				"name_hiragana"=> "ひとかげ",
				"type1"=> "ほのお",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 5,
		        "kana"=> "リ",
		        "name_katakana"=> "リザード",
				"name_hiragana"=> "りざーど",
				"type1"=> "ほのお",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 6,
		        "kana"=> "リ",
		        "name_katakana"=> "リザードン",
				"name_hiragana"=> "りざーどん",
				"type1"=> "ほのお",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 7,
		        "kana"=> "ゼ",
		        "name_katakana"=> "ゼニガメ",
				"name_hiragana"=> "ぜにがな",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 8,
		        "kana"=> "カ",
		        "name_katakana"=> "カメール",
				"name_hiragana"=> "かめーる",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 9,
		        "kana"=> "カ",
		        "name_katakana"=> "カメックス",
				"name_hiragana"=> "かめっくす",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 10,
		        "kana"=> "キ",
		        "name_katakana"=> "キャタピー",
				"name_hiragana"=> "",
				"type1"=> "むし",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 11,
		        "kana"=> "ト",
		        "name_katakana"=> "トランセル",
				"name_hiragana"=> "",
				"type1"=> "むし",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 12,
		        "kana"=> "バ",
		        "name_katakana"=> "バタフリー",
				"name_hiragana"=> "",
				"type1"=> "むし",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 13,
		        "kana"=> "ビ",
		        "name_katakana"=> "ビードル",
				"name_hiragana"=> "",
				"type1"=> "むし",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 14,
		        "kana"=> "コ",
		        "name_katakana"=> "コクーン",
				"name_hiragana"=> "",
				"type1"=> "むし",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 15,
		        "kana"=> "ス",
		        "name_katakana"=> "スピアー",
				"name_hiragana"=> "",
				"type1"=> "むし",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 16,
		        "kana"=> "ポ",
		        "name_katakana"=> "ポッポ",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 17,
		        "kana"=> "ピ",
		        "name_katakana"=> "ピジョン",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 18,
		        "kana"=> "ピ",
		        "name_katakana"=> "ピジョット",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 19,
		        "kana"=> "コ",
		        "name_katakana"=> "コラッタ",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 20,
		        "kana"=> "ラ",
		        "name_katakana"=> "ラッタ",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 21,
		        "kana"=> "オ",
		        "name_katakana"=> "オニスズメ",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 22,
		        "kana"=> "オ",
		        "name_katakana"=> "オニドリル",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 23,
		        "kana"=> "ア",
		        "name_katakana"=> "アーボ",
				"name_hiragana"=> "",
				"type1"=> "どく",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 24,
		        "kana"=> "ア",
		        "name_katakana"=> "アーボック",
				"name_hiragana"=> "",
				"type1"=> "どく",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 25,
		        "kana"=> "ピ",
		        "name_katakana"=> "ピカチュウ",
				"name_hiragana"=> "",
				"type1"=> "でんき",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 26,
		        "kana"=> "ラ",
		        "name_katakana"=> "ライチュウ",
				"name_hiragana"=> "",
				"type1"=> "でんき",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 27,
		        "kana"=> "サ",
		        "name_katakana"=> "サンド",
				"name_hiragana"=> "",
				"type1"=> "じめん",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 28,
		        "kana"=> "サ",
		        "name_katakana"=> "サンドパン",
				"name_hiragana"=> "",
				"type1"=> "じめん",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 29,
		        "kana"=> "ニ",
		        "name_katakana"=> "ニドラン♀",
				"name_hiragana"=> "",
				"type1"=> "どく",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 30,
		        "kana"=> "ニ",
		        "name_katakana"=> "ニドリーナ",
				"name_hiragana"=> "",
				"type1"=> "どく",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 31,
		        "kana"=> "ニ",
		        "name_katakana"=> "ニドクイン",
				"name_hiragana"=> "",
				"type1"=> "どく",
		        "type2"=> "じめん"
		    ),
		    array(
			    "id" => 32,
		        "kana"=> "ニ",
		        "name_katakana"=> "ニドラン♂",
				"name_hiragana"=> "",
				"type1"=> "どく",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 33,
		        "kana"=> "ニ",
		        "name_katakana"=> "ニドリーノ",
				"name_hiragana"=> "",
				"type1"=> "どく",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 34,
		        "kana"=> "ニ",
		        "name_katakana"=> "ニドキング",
				"name_hiragana"=> "",
				"type1"=> "どく",
		        "type2"=> "じめん"
		    ),
		    array(
			    "id" => 35,
		        "kana"=> "ピ",
		        "name_katakana"=> "ピッピ",
				"name_hiragana"=> "",
				"type1"=> "フェアリー",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 36,
		        "kana"=> "ピ",
		        "name_katakana"=> "ピクシー",
				"name_hiragana"=> "",
				"type1"=> "フェアリー",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 37,
		        "kana"=> "ロ",
		        "name_katakana"=> "ロコン",
				"name_hiragana"=> "",
				"type1"=> "ほのお",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 38,
		        "kana"=> "キ",
		        "name_katakana"=> "キュウコン",
				"name_hiragana"=> "",
				"type1"=> "ほのお",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 39,
		        "kana"=> "プ",
		        "name_katakana"=> "プリン",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> "フェアリー"
		    ),
		    array(
			    "id" => 40,
		        "kana"=> "プ",
		        "name_katakana"=> "プクリン",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> "フェアリー"
		    ),
		    array(
			    "id" => 41,
		        "kana"=> "ズ",
		        "name_katakana"=> "ズバット",
				"name_hiragana"=> "",
				"type1"=> "どく",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 42,
		        "kana"=> "ゴ",
		        "name_katakana"=> "ゴルバット",
				"name_hiragana"=> "",
				"type1"=> "どく",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 43,
		        "kana"=> "ナ",
		        "name_katakana"=> "ナゾノクサ",
				"name_hiragana"=> "",
				"type1"=> "くさ",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 44,
		        "kana"=> "ク",
		        "name_katakana"=> "クサイハナ",
				"name_hiragana"=> "",
				"type1"=> "くさ",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 45,
		        "kana"=> "ラ",
		        "name_katakana"=> "ラフレシア",
				"name_hiragana"=> "",
				"type1"=> "くさ",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 46,
		        "kana"=> "パ",
		        "name_katakana"=> "パラス",
				"name_hiragana"=> "",
				"type1"=> "むし",
		        "type2"=> "くさ"
		    ),
		    array(
			    "id" => 47,
		        "kana"=> "パ",
		        "name_katakana"=> "パラセクト",
				"name_hiragana"=> "",
				"type1"=> "むし",
		        "type2"=> "くさ"
		    ),
		    array(
			    "id" => 48,
		        "kana"=> "コ",
		        "name_katakana"=> "コンパン",
				"name_hiragana"=> "",
				"type1"=> "むし",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 49,
		        "kana"=> "モ",
		        "name_katakana"=> "モルフォン",
				"name_hiragana"=> "",
				"type1"=> "むし",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 50,
		        "kana"=> "デ",
		        "name_katakana"=> "ディグダ",
				"name_hiragana"=> "",
				"type1"=> "じめん",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 51,
		        "kana"=> "ダ",
		        "name_katakana"=> "ダグトリオ",
				"name_hiragana"=> "",
				"type1"=> "じめん",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 52,
		        "kana"=> "ニ",
		        "name_katakana"=> "ニャース",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 53,
		        "kana"=> "ペ",
		        "name_katakana"=> "ペルシアン",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 54,
		        "kana"=> "コ",
		        "name_katakana"=> "コダック",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 55,
		        "kana"=> "ゴ",
		        "name_katakana"=> "ゴルダック",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 56,
		        "kana"=> "マ",
		        "name_katakana"=> "マンキー",
				"name_hiragana"=> "",
				"type1"=> "かくとう",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 57,
		        "kana"=> "",
		        "name_katakana"=> "オコリザル",
				"name_hiragana"=> "",
				"type1"=> "かくとう",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 58,
		        "kana"=> "ガ",
		        "name_katakana"=> "ガーディ",
				"name_hiragana"=> "",
				"type1"=> "ほのお",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 59,
		        "kana"=> "ウ",
		        "name_katakana"=> "ウインディ",
				"name_hiragana"=> "",
				"type1"=> "ほのお",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 60,
		        "kana"=> "ニ",
		        "name_katakana"=> "ニョロモ",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 61,
		        "kana"=> "ニ",
		        "name_katakana"=> "ニョロゾ",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 62,
		        "kana"=> "ニ",
		        "name_katakana"=> "ニョロボン",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> "かくとう"
		    ),
		    array(
			    "id" => 63,
		        "kana"=> "ケ",
		        "name_katakana"=> "ケーシィ",
				"name_hiragana"=> "",
				"type1"=> "エスパ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 64,
		        "kana"=> "ユ",
		        "name_katakana"=> "ユンゲラー",
				"name_hiragana"=> "",
				"type1"=> "エスパ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 65,
		        "kana"=> "フ",
		        "name_katakana"=> "フーディン",
				"name_hiragana"=> "",
				"type1"=> "エスパ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 66,
		        "kana"=> "ワ",
		        "name_katakana"=> "ワンリキー",
				"name_hiragana"=> "",
				"type1"=> "かくとう",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 67,
		        "kana"=> "ゴ",
		        "name_katakana"=> "ゴーリキー",
				"name_hiragana"=> "",
				"type1"=> "かくとう",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 68,
		        "kana"=> "カ",
		        "name_katakana"=> "カイリキー",
				"name_hiragana"=> "",
				"type1"=> "かくとう",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 69,
		        "kana"=> "マ",
		        "name_katakana"=> "マダツボミ",
				"name_hiragana"=> "",
				"type1"=> "くさ",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 70,
		        "kana"=> "ウ",
		        "name_katakana"=> "ウツドン",
				"name_hiragana"=> "",
				"type1"=> "くさ",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 71,
		        "kana"=> "ウ",
		        "name_katakana"=> "ウツボット",
				"name_hiragana"=> "",
				"type1"=> "くさ",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 72,
		        "kana"=> "メ",
		        "name_katakana"=> "メノクラゲ",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 73,
		        "kana"=> "ド",
		        "name_katakana"=> "ドククラゲ",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 74,
		        "kana"=> "イ",
		        "name_katakana"=> "イシツブテ",
				"name_hiragana"=> "",
				"type1"=> "いわ",
		        "type2"=> "じめん"
		    ),
		    array(
			    "id" => 75,
		        "kana"=> "ゴ",
		        "name_katakana"=> "ゴローン",
				"name_hiragana"=> "",
				"type1"=> "いわ",
		        "type2"=> "じめん"
		    ),
		    array(
			    "id" => 76,
		        "kana"=> "ゴ",
		        "name_katakana"=> "ゴローニャ",
				"name_hiragana"=> "",
				"type1"=> "いわ",
		        "type2"=> "じめん"
		    ),
		    array(
			    "id" => 77,
		        "kana"=> "ポ",
		        "name_katakana"=> "ポニータ",
				"name_hiragana"=> "",
				"type1"=> "ほのお",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 78,
		        "kana"=> "ギ",
		        "name_katakana"=> "ギャロップ",
				"name_hiragana"=> "",
				"type1"=> "ほのお",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 79,
		        "kana"=> "ヤ",
		        "name_katakana"=> "ヤドン",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> "エスパ"
		    ),
		    array(
			    "id" => 80,
		        "kana"=> "ヤ",
		        "name_katakana"=> "ヤドラン",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> "エスパ"
		    ),
		    array(
			    "id" => 81,
		        "kana"=> "コ",
		        "name_katakana"=> "コイル",
				"name_hiragana"=> "",
				"type1"=> "でんき",
		        "type2"=> "はがね"
		    ),
		    array(
			    "id" => 82,
		        "kana"=> "レ",
		        "name_katakana"=> "レアコイル",
				"name_hiragana"=> "",
				"type1"=> "でんき",
		        "type2"=> "はがね"
		    ),
		    array(
			    "id" => 83,
		        "kana"=> "カ",
		        "name_katakana"=> "カモネギ",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 84,
		        "kana"=> "ド",
		        "name_katakana"=> "ドードー",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 85,
		        "kana"=> "ド",
		        "name_katakana"=> "ドードリオ",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 86,
		        "kana"=> "パ",
		        "name_katakana"=> "パウワウ",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 87,
		        "kana"=> "ジ",
		        "name_katakana"=> "ジュゴン",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> "こおり"
		    ),
		    array(
			    "id" => 88,
		        "kana"=> "ベ",
		        "name_katakana"=> "ベトベター",
				"name_hiragana"=> "",
				"type1"=> "どく",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 89,
		        "kana"=> "ベ",
		        "name_katakana"=> "ベトベトン",
				"name_hiragana"=> "",
				"type1"=> "どく",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 90,
		        "kana"=> "シ",
		        "name_katakana"=> "シェルダー",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 91,
		        "kana"=> "パ",
		        "name_katakana"=> "パルシェン",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> "こおり"
		    ),
		    array(
			    "id" => 92,
		        "kana"=> "ゴ",
		        "name_katakana"=> "ゴース",
				"name_hiragana"=> "",
				"type1"=> "ゴースト",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 93,
		        "kana"=> "ゴ",
		        "name_katakana"=> "ノーマル",
				"name_hiragana"=> "",
				"type1"=> "ゴースト",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 94,
		        "kana"=> "ゲ",
		        "name_katakana"=> "ゲンガー",
				"name_hiragana"=> "",
				"type1"=> "ゴースト",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 95,
		        "kana"=> "イ",
		        "name_katakana"=> "イワーク",
				"name_hiragana"=> "",
				"type1"=> "いわ",
		        "type2"=> "じめん"
		    ),
		    array(
			    "id" => 96,
		        "kana"=> "ス",
		        "name_katakana"=> "スリープ",
				"name_hiragana"=> "",
				"type1"=> "エスパ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 97,
		        "kana"=> "ス",
		        "name_katakana"=> "スリーパー",
				"name_hiragana"=> "",
				"type1"=> "エスパ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 98,
		        "kana"=> "ク",
		        "name_katakana"=> "クラブ",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 99,
		        "kana"=> "キ",
		        "name_katakana"=> "キングラー",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 100,
		        "kana"=> "ビ",
		        "name_katakana"=> "ビリリダマ",
				"name_hiragana"=> "",
				"type1"=> "でんき",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 101,
		        "kana"=> "マ",
		        "name_katakana"=> "マルマイン",
				"name_hiragana"=> "",
				"type1"=> "でんき",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 102,
		        "kana"=> "タ",
		        "name_katakana"=> "タマタマ",
				"name_hiragana"=> "",
				"type1"=> "くさ",
		        "type2"=> "エスパ"
		    ),
		    array(
			    "id" => 103,
		        "kana"=> "ナ",
		        "name_katakana"=> "ナッシー",
				"name_hiragana"=> "",
				"type1"=> "くさ",
		        "type2"=> "エスパ"
		    ),
		    array(
			    "id" => 104,
		        "kana"=> "カ",
		        "name_katakana"=> "カラカラ",
				"name_hiragana"=> "",
				"type1"=> "じめん",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 105,
		        "kana"=> "ガ",
		        "name_katakana"=> "ガラガラ",
				"name_hiragana"=> "",
				"type1"=> "じめん",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 106,
		        "kana"=> "サ",
		        "name_katakana"=> "サワムラー",
				"name_hiragana"=> "",
				"type1"=> "かくとう",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 107,
		        "kana"=> "エ",
		        "name_katakana"=> "エビワラー",
				"name_hiragana"=> "",
				"type1"=> "かくとう",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 108,
		        "kana"=> "ベ",
		        "name_katakana"=> "ベロリンガ",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 109,
		        "kana"=> "ド",
		        "name_katakana"=> "ドガース",
				"name_hiragana"=> "",
				"type1"=> "どく",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 110,
		        "kana"=> "マ",
		        "name_katakana"=> "マタドガス",
				"name_hiragana"=> "",
				"type1"=> "どく",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 111,
		        "kana"=> "サ",
		        "name_katakana"=> "サイホーン",
				"name_hiragana"=> "",
				"type1"=> "じめん",
		        "type2"=> "いわ"
		    ),
		    array(
			    "id" => 112,
		        "kana"=> "サ",
		        "name_katakana"=> "サイドン",
				"name_hiragana"=> "",
				"type1"=> "じめん",
		        "type2"=> "いわ"
		    ),
		    array(
			    "id" => 113,
		        "kana"=> "ラ",
		        "name_katakana"=> "ラッキー",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 114,
		        "kana"=> "モ",
		        "name_katakana"=> "モンジャラ",
				"name_hiragana"=> "",
				"type1"=> "くさ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 115,
		        "kana"=> "ガ",
		        "name_katakana"=> "ガルーラ",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 116,
		        "kana"=> "タ",
		        "name_katakana"=> "タッツー",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 117,
		        "kana"=> "シ",
		        "name_katakana"=> "シードラ",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 118,
		        "kana"=> "ト",
		        "name_katakana"=> "トサキント",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 119,
		        "kana"=> "ア",
		        "name_katakana"=> "アズマオウ",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 120,
		        "kana"=> "ヒ",
		        "name_katakana"=> "ヒトデマン",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 121,
		        "kana"=> "ス",
		        "name_katakana"=> "スターミー",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> "エスパ"
		    ),
		    array(
			    "id" => 122,
		        "kana"=> "バ",
		        "name_katakana"=> "バリヤード",
				"name_hiragana"=> "",
				"type1"=> "エスパ",
		        "type2"=> "フェアリー"
		    ),
		    array(
			    "id" => 123,
		        "kana"=> "ス",
		        "name_katakana"=> "ストライク",
				"name_hiragana"=> "",
				"type1"=> "むし",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 124,
		        "kana"=> "ル",
		        "name_katakana"=> "ルージュラ",
				"name_hiragana"=> "",
				"type1"=> "こおり",
		        "type2"=> "エスパ"
		    ),
		    array(
			    "id" => 125,
		        "kana"=> "エ",
		        "name_katakana"=> "エレブー",
				"name_hiragana"=> "",
				"type1"=> "でんき",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 126,
		        "kana"=> "ブ",
		        "name_katakana"=> "ブーバー",
				"name_hiragana"=> "",
				"type1"=> "ほのお",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 127,
		        "kana"=> "カ",
		        "name_katakana"=> "カイロス",
				"name_hiragana"=> "",
				"type1"=> "むし",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 128,
		        "kana"=> "ケ",
		        "name_katakana"=> "ケンタロス",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 129,
		        "kana"=> "ケ",
		        "name_katakana"=> "ケンタロス",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 130,
		        "kana"=> "ギ",
		        "name_katakana"=> "ギャラドス",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 131,
		        "kana"=> "ラ",
		        "name_katakana"=> "ラプラス",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> "こおり"
		    ),
		    array(
			    "id" => 132,
		        "kana"=> "メ",
		        "name_katakana"=> "メタモン",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 133,
		        "kana"=> "イ",
		        "name_katakana"=> "イーブイ",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 134,
		        "kana"=> "シ",
		        "name_katakana"=> "シャワーズ",
				"name_hiragana"=> "",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 135,
		        "kana"=> "サ",
		        "name_katakana"=> "サンダース",
				"name_hiragana"=> "",
				"type1"=> "でんき",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 136,
		        "kana"=> "ブ",
		        "name_katakana"=> "ブースター",
				"name_hiragana"=> "",
				"type1"=> "ほのお",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 137,
		        "kana"=> "ポ",
		        "name_katakana"=> "ポリゴン",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 138,
		        "kana"=> "オ",
		        "name_katakana"=> "オムナイト",
				"name_hiragana"=> "",
				"type1"=> "いわ",
		        "type2"=> "みず"
		    ),
		    array(
			    "id" => 139,
		        "kana"=> "オ",
		        "name_katakana"=> "オムスター",
				"name_hiragana"=> "",
				"type1"=> "いわ",
		        "type2"=> "みず"
		    ),
		    array(
			    "id" => 140,
		        "kana"=> "カ",
		        "name_katakana"=> "カブト",
				"name_hiragana"=> "",
				"type1"=> "いわ",
		        "type2"=> "みず"
		    ),
		    array(
			    "id" => 141,
		        "kana"=> "カ",
		        "name_katakana"=> "カブトプス",
				"name_hiragana"=> "",
				"type1"=> "いわ",
		        "type2"=> "みず"
		    ),
		    array(
			    "id" => 142,
		        "kana"=> "プ",
		        "name_katakana"=> "プテラ",
				"name_hiragana"=> "",
				"type1"=> "いわ",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 143,
		        "kana"=> "カ",
		        "name_katakana"=> "カビゴン",
				"name_hiragana"=> "",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 144,
		        "kana"=> "フ",
		        "name_katakana"=> "フリーザー",
				"name_hiragana"=> "",
				"type1"=> "こおり",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 145,
		        "kana"=> "サ",
		        "name_katakana"=> "サンダー",
				"name_hiragana"=> "",
				"type1"=> "でんき",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 146,
		        "kana"=> "フ",
		        "name_katakana"=> "ファイヤー",
				"name_hiragana"=> "",
				"type1"=> "ほのお",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 147,
		        "kana"=> "ミ",
		        "name_katakana"=> "ミニリュウ",
				"name_hiragana"=> "",
				"type1"=> "ドラゴン",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 148,
		        "kana"=> "ハ",
		        "name_katakana"=> "ハクリュー",
				"name_hiragana"=> "",
				"type1"=> "ドラゴン",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 149,
		        "kana"=> "カ",
		        "name_katakana"=> "カイリュー",
				"name_hiragana"=> "",
				"type1"=> "ドラゴン",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 150,
		        "kana"=> "ミ",
		        "name_katakana"=> "ミュウツー",
				"name_hiragana"=> "",
				"type1"=> "エスパ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 151,
		        "kana"=> "ミ",
		        "name_katakana"=> "ミュウ",
				"name_hiragana"=> "",
				"type1"=> "エスパ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 152,
		        "kana"=> "チ",
		        "name_katakana"=> "チコリータ",
				"name_hiragana"=> "ちこりーた",
				"type1"=> "くさ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 153,
		        "kana"=> "ベ",
		        "name_katakana"=> "ベイリーフ",
				"name_hiragana"=> "べいりーふ",
				"type1"=> "くさ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 154,
		        "kana"=> "メ",
		        "name_katakana"=> "メガニウム",
				"name_hiragana"=> "めがにうむ",
				"type1"=> "くさ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 155,
		        "kana"=> "ヒ",
		        "name_katakana"=> "ヒノアラシ",
				"name_hiragana"=> "ひのあらし",
				"type1"=> "ほのお",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 156,
		        "kana"=> "マ",
		        "name_katakana"=> "マグマラシ",
				"name_hiragana"=> "まぐまらし",
				"type1"=> "ほのお",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 157,
		        "kana"=> "バ",
		        "name_katakana"=> "バクフーン",
				"name_hiragana"=> "ばくふーん",
				"type1"=> "ほのお",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 158,
		        "kana"=> "ワ",
		        "name_katakana"=> "ワニノコ",
				"name_hiragana"=> "わにのこ",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 159,
		        "kana"=> "ア",
		        "name_katakana"=> "アリゲイツ",
				"name_hiragana"=> "ありげいつ",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 160,
		        "kana"=> "オ",
		        "name_katakana"=> "オーダイル",
				"name_hiragana"=> "おーだいる",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 161,
		        "kana"=> "オ",
		        "name_katakana"=> "オタチ",
				"name_hiragana"=> "おたち",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 162,
		        "kana"=> "オ",
		        "name_katakana"=> "オオタチ",
				"name_hiragana"=> "おおたち",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 163,
		        "kana"=> "ホ",
		        "name_katakana"=> "ホーホー",
				"name_hiragana"=> "ほーほー",
				"type1"=> "ノーマル",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 164,
		        "kana"=> "ヨ",
		        "name_katakana"=> "ヨルノズク",
				"name_hiragana"=> "よるのずく",
				"type1"=> "ノーマル",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 165,
		        "kana"=> "レ",
		        "name_katakana"=> "レディバ",
				"name_hiragana"=> "れでぃば",
				"type1"=> "むし",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 166,
		        "kana"=> "レ",
		        "name_katakana"=> "レディアン",
				"name_hiragana"=> "れでぃあん",
				"type1"=> "むし",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 167,
		        "kana"=> "イ",
		        "name_katakana"=> "イトマル",
				"name_hiragana"=> "いとまる",
				"type1"=> "むし",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 168,
		        "kana"=> "ア",
		        "name_katakana"=> "アリアドス",
				"name_hiragana"=> "ありあどす",
				"type1"=> "むし",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 169,
		        "kana"=> "ク",
		        "name_katakana"=> "クロバット",
				"name_hiragana"=> "くこばっと",
				"type1"=> "どく",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 170,
		        "kana"=> "チ",
		        "name_katakana"=> "チョンチー",
				"name_hiragana"=> "ちょんチー",
				"type1"=> "みず",
		        "type2"=> "でんき"
		    ),
		    array(
			    "id" => 171,
		        "kana"=> "ラ",
		        "name_katakana"=> "ランターン",
				"name_hiragana"=> "らんたーん",
				"type1"=> "みず",
		        "type2"=> "でんき"
		    ),
		    array(
			    "id" => 172,
		        "kana"=> "ピ",
		        "name_katakana"=> "ピチュー",
				"name_hiragana"=> "ぴちゅー",
				"type1"=> "でんき",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 173,
		        "kana"=> "ピ",
		        "name_katakana"=> "ピィ",
				"name_hiragana"=> "ぴぃ",
				"type1"=> "フェアリー",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 174,
		        "kana"=> "プ",
		        "name_katakana"=> "ププリン",
				"name_hiragana"=> "ぷぷりん",
				"type1"=> "ノーマル",
		        "type2"=> "フェアリー"
		    ),
		    array(
			    "id" => 175,
		        "kana"=> "ト",
		        "name_katakana"=> "トゲピー",
				"name_hiragana"=> "とげぴー",
				"type1"=> "フェアリー",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 176,
		        "kana"=> "ト",
		        "name_katakana"=> "トゲチック",
				"name_hiragana"=> "とげちっく",
				"type1"=> "フェアリー",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 177,
		        "kana"=> "ネ",
		        "name_katakana"=> "ネイティ",
				"name_hiragana"=> "ねいてぃ",
				"type1"=> "エスパ",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 178,
		        "kana"=> "ネ",
		        "name_katakana"=> "ネイティオ",
				"name_hiragana"=> "ねいてぃお",
				"type1"=> "エスパ",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 179,
		        "kana"=> "メ",
		        "name_katakana"=> "メリープ",
				"name_hiragana"=> "めりーぷ",
				"type1"=> "でんき",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 180,
		        "kana"=> "モ",
		        "name_katakana"=> "モココ",
				"name_hiragana"=> "もここ",
				"type1"=> "でんき",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 181,
		        "kana"=> "デ",
		        "name_katakana"=> "デンリュウ",
				"name_hiragana"=> "でんりゅう",
				"type1"=> "でんき",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 182,
		        "kana"=> "キ",
		        "name_katakana"=> "キレイハナ",
				"name_hiragana"=> "きれいはな",
				"type1"=> "くさ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 183,
		        "kana"=> "マ",
		        "name_katakana"=> "マリル",
				"name_hiragana"=> "まりる",
				"type1"=> "みず",
		        "type2"=> "フェアリー"
		    ),
		    array(
			    "id" => 184,
		        "kana"=> "マ",
		        "name_katakana"=> "マリルリ",
				"name_hiragana"=> "まりるり",
				"type1"=> "みず",
		        "type2"=> "フェアリー"
		    ),
		    array(
			    "id" => 185,
		        "kana"=> "ウ",
		        "name_katakana"=> "ウソッキー",
				"name_hiragana"=> "うんっきー",
				"type1"=> "いわ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 186,
		        "kana"=> "ニ",
		        "name_katakana"=> "ニョロトノ",
				"name_hiragana"=> "にょことの",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 187,
		        "kana"=> "ハ",
		        "name_katakana"=> "ハネッコ",
				"name_hiragana"=> "はねっこ",
				"type1"=> "くさ",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 188,
		        "kana"=> "ポ",
		        "name_katakana"=> "ポポッコ",
				"name_hiragana"=> "ぽぽっこ",
				"type1"=> "くさ",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 189,
		        "kana"=> "ワ",
		        "name_katakana"=> "ワタッコ",
				"name_hiragana"=> "わたっこ",
				"type1"=> "くさ",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 190,
		        "kana"=> "エ",
		        "name_katakana"=> "エイパム",
				"name_hiragana"=> "えいばむ",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 191,
		        "kana"=> "ヒ",
		        "name_katakana"=> "ヒマナッツ",
				"name_hiragana"=> "ひまなっつ",
				"type1"=> "くさ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 192,
		        "kana"=> "キ",
		        "name_katakana"=> "キマワリ",
				"name_hiragana"=> "きまわり",
				"type1"=> "くさ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 193,
		        "kana"=> "ヤ",
		        "name_katakana"=> "ヤンヤンマ",
				"name_hiragana"=> "やんやんま",
				"type1"=> "むし",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 194,
		        "kana"=> "ウ",
		        "name_katakana"=> "ウパー",
				"name_hiragana"=> "うばー",
				"type1"=> "みず",
		        "type2"=> "じめん"
		    ),
		    array(
			    "id" => 195,
		        "kana"=> "ヌ",
		        "name_katakana"=> "ヌオー",
				"name_hiragana"=> "たおー",
				"type1"=> "みず",
		        "type2"=> "じめん"
		    ),
		    array(
			    "id" => 196,
		        "kana"=> "エ",
		        "name_katakana"=> "エーフィ",
				"name_hiragana"=> "えーふぃ",
				"type1"=> "エスパ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 197,
		        "kana"=> "ブ",
		        "name_katakana"=> "ブラッキー",
				"name_hiragana"=> "ぶらっきー",
				"type1"=> "あく",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 198,
		        "kana"=> "ヤ",
		        "name_katakana"=> "ヤミカラス",
				"name_hiragana"=> "やめからす",
				"type1"=> "あく",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 199,
		        "kana"=> "ヤ",
		        "name_katakana"=> "ヤドキング",
				"name_hiragana"=> "やどきんぐ",
				"type1"=> "みず",
		        "type2"=> "エスパ"
		    ),
		    array(
			    "id" => 200,
		        "kana"=> "ム",
		        "name_katakana"=> "ムウマ",
				"name_hiragana"=> "むうま",
				"type1"=> "ゴースト",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 201,
		        "kana"=> "ア",
		        "name_katakana"=> "アンノーン",
				"name_hiragana"=> "あんのーん",
				"type1"=> "エスパ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 202,
		        "kana"=> "ソ",
		        "name_katakana"=> "ソーナンス",
				"name_hiragana"=> "そーなんす",
				"type1"=> "エスパ",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 203,
		        "kana"=> "キ",
		        "name_katakana"=> "キリンリキ",
				"name_hiragana"=> "きりんりき",
				"type1"=> "ノーマル",
		        "type2"=> "エスパ"
		    ),
		    array(
			    "id" => 204,
		        "kana"=> "ク",
		        "name_katakana"=> "クヌギダマ",
				"name_hiragana"=> "くぬぎだま",
				"type1"=> "むし",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 205,
		        "kana"=> "フ",
		        "name_katakana"=> "フォレトス",
				"name_hiragana"=> "ふぉれとす",
				"type1"=> "むし",
		        "type2"=> "はがね"
		    ),
		    array(
			    "id" => 206,
		        "kana"=> "ノ",
		        "name_katakana"=> "ノコッチ",
				"name_hiragana"=> "のこっち",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 207,
		        "kana"=> "グ",
		        "name_katakana"=> "グライガー",
				"name_hiragana"=> "ぐらいがー",
				"type1"=> "じめん",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 208,
		        "kana"=> "ハ",
		        "name_katakana"=> "ハガネール",
				"name_hiragana"=> "はがねーる",
				"type1"=> "はがね",
		        "type2"=> "じめん"
		    ),
		    array(
			    "id" => 209,
		        "kana"=> "ブ",
		        "name_katakana"=> "ブルー",
				"name_hiragana"=> "ぷるー",
				"type1"=> "フェアリー",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 210,
		        "kana"=> "グ",
		        "name_katakana"=> "グランブル",
				"name_hiragana"=> "ぐらんぶる",
				"type1"=> "フェアリー",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 211,
		        "kana"=> "ハ",
		        "name_katakana"=> "ハリーセン",
				"name_hiragana"=> "はりーせん",
				"type1"=> "みず",
		        "type2"=> "どく"
		    ),
		    array(
			    "id" => 212,
		        "kana"=> "ハ",
		        "name_katakana"=> "ハッサム",
				"name_hiragana"=> "はっさむ",
				"type1"=> "むし",
		        "type2"=> "はがね"
		    ),
		    array(
			    "id" => 213,
		        "kana"=> "ツ",
		        "name_katakana"=> "ツボツボ",
				"name_hiragana"=> "つぼつぼ",
				"type1"=> "むし",
		        "type2"=> "いわ"
		    ),
		    array(
			    "id" => 214,
		        "kana"=> "ヘ",
		        "name_katakana"=> "ヘラクロス",
				"name_hiragana"=> "へらくろす",
				"type1"=> "むし",
		        "type2"=> "かくとう"
		    ),
		    array(
			    "id" => 215,
		        "kana"=> "ニ",
		        "name_katakana"=> "ニューラ",
				"name_hiragana"=> "にゅーら",
				"type1"=> "あく",
		        "type2"=> "こおり"
		    ),
		    array(
			    "id" => 216,
		        "kana"=> "ヒ",
		        "name_katakana"=> "ヒメグマ",
				"name_hiragana"=> "ひめぐま",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 217,
		        "kana"=> "リ",
		        "name_katakana"=> "リングマ",
				"name_hiragana"=> "りんぐま",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 218,
		        "kana"=> "マ",
		        "name_katakana"=> "マグマッグ",
				"name_hiragana"=> "まぐまっぐ",
				"type1"=> "ほのお",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 219,
		        "kana"=> "マ",
		        "name_katakana"=> "マグカルゴ",
				"name_hiragana"=> "まぐかるご",
				"type1"=> "ほのお",
		        "type2"=> "いわ"
		    ),
		    array(
			    "id" => 220,
		        "kana"=> "ウ",
		        "name_katakana"=> "ウリムー",
				"name_hiragana"=> "うりむー",
				"type1"=> "こおり",
		        "type2"=> "じめん"
		    ),
		    array(
			    "id" => 221,
		        "kana"=> "イ",
		        "name_katakana"=> "イノムー",
				"name_hiragana"=> "いのむー",
				"type1"=> "こおり",
		        "type2"=> "じめん"
		    ),
		    array(
			    "id" => 222,
		        "kana"=> "サ",
		        "name_katakana"=> "サニーゴ",
				"name_hiragana"=> "さにーご",
				"type1"=> "みず",
		        "type2"=> "いわ"
		    ),
		    array(
			    "id" => 223,
		        "kana"=> "テ",
		        "name_katakana"=> "テッポウオ",
				"name_hiragana"=> "てっぽうお",
				"type1"=> "みず",
		        "type2"=> "いわ"
		    ),
		    array(
			    "id" => 224,
		        "kana"=> "オ",
		        "name_katakana"=> "オクタン",
				"name_hiragana"=> "おくたん",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 225,
		        "kana"=> "デ",
		        "name_katakana"=> "デリバード",
				"name_hiragana"=> "でりばーど",
				"type1"=> "こおり",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 226,
		        "kana"=> "マ",
		        "name_katakana"=> "マンタイン",
				"name_hiragana"=> "まんたいん",
				"type1"=> "みず",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 227,
		        "kana"=> "エ",
		        "name_katakana"=> "エアームド",
				"name_hiragana"=> "えやーむど",
				"type1"=> "はがね",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 228,
		        "kana"=> "デ",
		        "name_katakana"=> "デルビル",
				"name_hiragana"=> "でるびる",
				"type1"=> "あく",
		        "type2"=> "ほのお"
		    ),
		    array(
			    "id" => 229,
		        "kana"=> "ヘ",
		        "name_katakana"=> "ヘルガー",
				"name_hiragana"=> "へるがー",
				"type1"=> "あく",
		        "type2"=> "ほのお"
		    ),
		    array(
			    "id" => 230,
		        "kana"=> "キ",
		        "name_katakana"=> "キングドラ",
				"name_hiragana"=> "きんぐどら",
				"type1"=> "みず",
		        "type2"=> "ドラゴン"
		    ),
		    array(
			    "id" => 231,
		        "kana"=> "ゴ",
		        "name_katakana"=> "ゴマゾウ",
				"name_hiragana"=> "ごまそう",
				"type1"=> "じめん",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 232,
		        "kana"=> "ド",
		        "name_katakana"=> "ドンファン",
				"name_hiragana"=> "どんふャン",
				"type1"=> "じめん",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 233,
		        "kana"=> "ポ",
		        "name_katakana"=> "ポリゴン２",
				"name_hiragana"=> "ぽりごん２",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 234,
		        "kana"=> "オ",
		        "name_katakana"=> "オドシシ",
				"name_hiragana"=> "おどつつ",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 235,
		        "kana"=> "ド",
		        "name_katakana"=> "ドーブル",
				"name_hiragana"=> "どーぶり",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 236,
		        "kana"=> "バ",
		        "name_katakana"=> "バルキー",
				"name_hiragana"=> "ばるきー",
				"type1"=> "かくとう",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 237,
		        "kana"=> "カ",
		        "name_katakana"=> "カポエラー",
				"name_hiragana"=> "かぼえうー",
				"type1"=> "かくとう",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 238,
		        "kana"=> "ム",
		        "name_katakana"=> "ムチュール",
				"name_hiragana"=> "むちゅーる",
				"type1"=> "こおり",
		        "type2"=> "エスパ"
		    ),
		    array(
			    "id" => 239,
		        "kana"=> "エ",
		        "name_katakana"=> "エレキッド",
				"name_hiragana"=> "えれきっど",
				"type1"=> "でんき",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 240,
		        "kana"=> "ブ",
		        "name_katakana"=> "ブビィ",
				"name_hiragana"=> "ぶびぃ",
				"type1"=> "ほのお",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 241,
		        "kana"=> "ミ",
		        "name_katakana"=> "ミルタンク",
				"name_hiragana"=> "みるたんく",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 242,
		        "kana"=> "ハ",
		        "name_katakana"=> "ハピナス",
				"name_hiragana"=> "はぴなす",
				"type1"=> "ノーマル",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 243,
		        "kana"=> "ラ",
		        "name_katakana"=> "ライコウ",
				"name_hiragana"=> "らいこう",
				"type1"=> "でんき",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 244,
		        "kana"=> "エ",
		        "name_katakana"=> "エンテイ",
				"name_hiragana"=> "えんてい",
				"type1"=> "ほのお",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 245,
		        "kana"=> "ス",
		        "name_katakana"=> "スイクン",
				"name_hiragana"=> "すいくん",
				"type1"=> "みず",
		        "type2"=> ""
		    ),
		    array(
			    "id" => 246,
		        "kana"=> "ヨ",
		        "name_katakana"=> "ヨーギラス",
				"name_hiragana"=> "よーぎラス",
				"type1"=> "いわ",
		        "type2"=> "じめん"
		    ),
		    array(
			    "id" => 247,
		        "kana"=> "サ",
		        "name_katakana"=> "サナギラス",
				"name_hiragana"=> "さなぎらす",
				"type1"=> "いわ",
		        "type2"=> "じめん"
		    ),
		    array(
			    "id" => 248,
		        "kana"=> "バ",
		        "name_katakana"=> "バンギラス",
				"name_hiragana"=> "ばんぎらす",
				"type1"=> "いわ",
		        "type2"=> "あく"
		    ),
		    array(
			    "id" => 249,
		        "kana"=> "ル",
		        "name_katakana"=> "ルギア",
				"name_hiragana"=> "るぎあ",
				"type1"=> "エスパ",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 250,
		        "kana"=> "ホ",
		        "name_katakana"=> "ホウオウ",
				"name_hiragana"=> "ほうおう",
				"type1"=> "ほのお",
		        "type2"=> "ひこう"
		    ),
		    array(
			    "id" => 251,
		        "kana"=> "セ",
		        "name_katakana"=> "セレビィ",
				"name_hiragana"=> "セレビぃ",
				"type1"=> "エスパ",
		        "type2"=> "くさ"
		    )
		);
	}

}
?>
