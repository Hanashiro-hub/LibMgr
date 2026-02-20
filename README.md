## セットアップ手順

### 1. 環境設定ファイルの作成
cp .env.example .env

### 2. Dockerコンテナ経由でComposerの依存パッケージをインストール
docker run --rm -v "$PWD":/app -w /app composer:2 composer install

### 3. Sail起動
./vendor/bin/sail up -d

### 4. DBマイグレーション
./vendor/bin/sail artisan migrate

### 5. Node依存パッケージのインストール
./vendor/bin/sail npm install

### 6. 開発サーバーの起動
./vendor/bin/sail npm run dev

### 7. localhostにアクセス