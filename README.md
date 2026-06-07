# あおば整形外科クリニック - WordPressカスタムテーマ

## 概要
整形外科クリニックを想定した架空企業のWordPressサイトです。
Figmaでトップページのデザインカンプを作成してから、フルスクラッチでカスタムテーマを作成し、実際の本番環境に公開しています。
柔道整復師として整形外科に勤務している経験を活かし、医療機関に必要な情報設計と信頼感のあるデザインを意識しました。

## デモ
https://clinic.craftiv.jp/

## 使用技術
- WordPress 7.0
- PHP
- HTML / CSS
- JavaScript（バニラ）
- MySQL
- Figma

## 実装機能
- カスタム投稿タイプ（診療内容・スタッフ）
- WP_Queryによる動的コンテンツ取得
- Contact Form 7によるお問い合わせフォーム
- Google Maps埋め込み
- Font Awesome アイコン
- ハンバーガーメニュー（SP対応）
- 動画ヒーローセクション
- レスポンシブデザイン（モバイルファースト）

## PageSpeed Insights
- デスクトップ：84 / 100
- モバイル：56 / 100
※ モバイルスコアは動画ヒーローの影響による

## ページ構成
- TOPページ
- クリニック紹介
- 診療内容一覧・詳細
- 医師・スタッフ紹介一覧・詳細
- 料金
- アクセス
- お問い合わせ
- お知らせ一覧・詳細

## ディレクトリ構成
\```
clinic-theme/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── index.php
├── front-page.php
├── page.php
├── single.php
├── single-service.php
├── single-staff.php
├── archive.php
├── home.php
├── archive-service.php
├── archive-staff.php
└── assets/
    ├── css/
    │   └── main.css
    ├── js/
    │   └── main.js
    └── images/
        └── hero.mp4
\```

## 制作のポイント

- Figmaでトップページのデザインカンプを作成してからコーディング
- 爽やかなブルー系カラーで清潔感と安心感を表現
- WordPressのカスタム投稿タイプで診療科目・医師紹介を管理
- PHPでヘッダー・フッターを共通化し保守性を高めた実装
- JavaScriptで診療時間表の動的表示を実装

## 制作期間

約1ヶ月