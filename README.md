# 統一發票紀錄
## 使用者情境：
```
1. 有一個輸入畫面可以用來輸入每次拿到的發票號碼，輸入完成的號碼會存到資料庫中
2. 有一個輸入畫面可以用來輸入當期的中獎獎號，並可以區分各獎項及期別，輸入完成的獎號和期別會存入資料庫中
3. 有一個畫面可以用來檢視所有的發票，並有連結或選單可以過濾發票的月份或期別
4. 有一顆按鈕可以用來針對某個期別的發票進行對獎。
5. 對獎的結果可以顯示：六獎=>1張=>小計200元;五獎=>2張=>小計2千元;合計2200元
```
## 畫面設計：
1. 首頁(index.php)
   - 選擇輸入的期別及月份
   - 有一個輸入欄位，用來輸入發票號碼
   - 有一顆送出按鈕，按後會將發票號碼存入資料庫
   - 有一個顯示當期發票的按鈕，按下後會跳到發票列表畫面
   - 有一個對獎按鈕，按下後會跳到對獎畫面
   - 有一個輸入獎號按鈕，按下後跳到輸入獎號畫面
2. 發票列表(list.php)
   - 會優先顯示當期的發票列表
   - 有提供按鈕或連結可以顯示當年度不同期別的發票列表
   - 每個發票號碼後面有一個編輯按鈕，按下後可以修改發票號碼
3. 對獎畫面(award.php)
   - 會顯示當期可對獎的期別獎號
   - 有一個按鈕[對獎]，按下後會針對該期別的發票進行對獎
   - 逐一對獎並顯示中獎與否
   - 對獎完畢後顯示總計畫面
4. 輸入獎號畫面(invoice.php)
   - 畫面分別顯示各獎別的欄位
   - 有一個按鈕是送出，有一個按鈕是重置
   - 依序填入獎號後可以按下送出按鈕
   - 獎號送出後會存入資料庫
   - 有一個查看獎號按鈕，按下後會跳到查詢獎號畫面
5. 查詢獎號畫面(query.php)
   - 顯示當年度六期的期別按鈕
   - 按下某期的按鈕會顯示該期的獎號
   - 有一個編輯的按鈕，按下後可以編輯該期別的獎號
## 資料庫設計
1. 發票資料表-invoice
   - id int(10),auto_increment,primary key
   - code varchar(2)
   - number varchar(8)
   - period tinyint(1), unsigned
   - expense int(10), unsigned
   - year varchar(4)
2. 獎號資料表- award
   - id int(10),auto_increment,primary key
   - period tinyint(1), unsigned
   - item varchar(3)
   - number varchar(8)
   - year varchar(4)
3. 中獎紀錄表- record
   - id int(10),auto_increment,primary key
   - number varchar(8)
   - period tinyint(1), unsigned
   - reward 
   - expense int(10), unsigned
   - year varchar(4)
## 程式功能設計
1. 接收發票號並存入資料庫
2. 接收獎號並存入資料庫
3. 接收中獎紀錄並存入資料庫
4. 發票列表功能
   - by 月 顯示
   - by 期別 顯示
   - 預設顯示當期的發票列表
   - 編輯發票號碼
5. 獎號列表功能
6. 獎號編輯功能
7. 對獎功能
   - 撈出對應期別的發票
   - 依獎項別逐一對獎並顯示結果
   - 對獎結束顯示總計畫面


### 開發記錄

#### 2020-05-26

* 完成基本功能
  問題：
  * 尚未處理年份欄位
  * 外觀使用 bootstrap 處理中，尚未完成
  * 將bootstrap改為CDN方式

#### 2020-05-16

* 增加中獎號碼資料表
* 進行輸入中獎號碼製作

#### 2020-05-14

* 發票列表改為按期列表
* 調整外觀
* 預計也加入年份分類，已先加入navbar

#### 2020-05-11

* 完成發票號碼編輯功能

#### 2020-05-10

* 完成發票列表

* 完成刪除功能

#### 2020-05-09

* 完成輸入獎號表單bootstrap設定

#### 2020-05-08

* 開始使用bootstrap
  
  問題：
  * 還沒學會表單控制，儘快修改