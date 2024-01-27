- error
	- 問題
		- wordpressのインストール画面でcssのスタイルが適用されない
	- 原因
		- wordpressのボリュームが/var/www/htmlに正しくマウントされていなく、nginxが参照できていなかった
	- 対策
		- docker-compose.ymlのvolumes:でwordpressとnginxのボリュームを合わせる

- error
	- 問題
		- mariadbをDockerfileから自作してwordpressを立ち上げようとしても"Error Establishing a Database Connection"でdbに接続できない
	- 行なったが直らなかった対処法
		- wp-config.phpのホスト名やデータベース名を環境変数の値と同じに書き換えた
	- 原因
		- mariadbのリッスンしているポート番号(3306番)がローカルホストのアドレスのみをバインドしていた。Dockerコンテナ間で通信するには、MariaDBサーバーが全てのネットワークインターフェース（0.0.0.0）または特定のDockerネットワークにバインドするように設定する必要がある
	- 対策
		- MariaDBの設定ファイル（my.cnf）を自作し、bind-address パラメータを調整する

- error
	- 問題
		- mariadbのコンテナを停止、終了させるのに10秒程度時間がかかる
	- 対策
		- PID1問題と言われている。今回であればtiniをインストールして、tiniをpid1で実行させる


- error
	- 問題
		- mariadbのsqlクエリが.envの環境変数を参照すると正しく実行されない
	- 原因
		- docker-compose.ymlでの環境変数はコンテナ実行時に設定されるので、Dockerfileが動作するイメージのビルド時には環境変数が設定されていなかった
	- 対策
		- docker-compose.ymlにargsを設定し、DockerfileにもARGを設定する。ARGで設定した環境変数はビルド時にのみ使用できるので、コンテナを立ち上げたときにはない

- error
	- 問題
		- wordpressのwp-config.phpでgetenvが使えない
	- 原因
		- デフォルトのPHP設定では環境変数がクリアされ、PHPプロセスに正しく渡されていない
	- 対策
		- www.confでclear_env パラメータを no に設定する