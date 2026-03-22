# Laravel 後端框架練習

此專案必須在Linux或WSL2中運行並操作，不可使用Powershell。

## Prerequisites

在開始前，你會需要在電腦上安裝好 `Docker Desktop`，安裝請參考 [Docker官方文件](https://docs.docker.com/get-started/get-docker/)。

## 安裝步驟

### 1. 複製環境變數檔案

我們需要複製一個全新的 `.env` 檔案，因為是機密檔案，所以不會加入 Git 版控:  

```bash
cp .env.example .env
```

### 2. 建立 Vendor 資料夾

你有兩個選擇:  

#### 1. 使用 Docker 的 Composer 執行一次性安裝

這個指令會直接使用現成的 `Docker` 容器來運行 `PHP` 與 `Composer` 來將 `vendor` 資料夾下載完成，並且完成後會移除容器自身。

 ```bash
 docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs
 ```

#### 2. 安裝全域 PHP 與 Composer

這個指令會一口氣把 `PHP 8.4` 與 `Composer` 安裝在作業系統中:

```bash
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
```

然後下載 `vendor`:

```bash
composer install
```

上述兩種方法都可以將 `vendor` 下載下來。

#### 3. 啟動 Sail 腳本

這個指令會運行自動啟動專案的容器。

```bash
./vendor/bin/sail up -d
```

#### 4. 產生應用程式金鑰

因為 `.env` 是全新的，因此需要重新產生專屬金鑰:

```bash
./vendor/bin/sail artisan key:generate
```

#### 5. 執行資料庫遷移

讓此專案能生成出正確的資料庫:

```bash
./vendor/bin/sail artisan migrate
```

## 啟動、存取、及關閉

此指令可以啟動容器:

```bash
./vendor/bin/sail up -d
```

參數 `-d` 作用是讓容器跑在背景，不占用此終端介面。

容器運行中時，可以透過瀏覽器輸入URL `localhost` 來存取網站，在 `env` 中可以透過新增 `APP_PORT=(your port)` 來修改監聽的 Port。

要進入容器內部作業系統的終端可以使用以下指令:

```bash
./vendor/bin/sail shell
```

要關閉容器時可以執行以下指令:

```bash
./vendor/bin/sail down
```
