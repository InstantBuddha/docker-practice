.SILENT:

setup:
	echo "Starting script"
	docker-compose up -d
	echo "Creating new row"
	docker exec -it mentoring_php_1 php create_row.php
	docker exec -it mentoring_php_1 php dump_row_count.php
	echo "Script finished"

insert-row:
	docker exec -it mentoring_php_1 php create_row.php

get-row-count:
	docker exec -it mentoring_php_1 php dump_row_count.php