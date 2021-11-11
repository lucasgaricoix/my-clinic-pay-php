CONTAINER=my-clinic-pay-php

install-dependencies:
	- docker exec -it ${CONTAINER} composer install --optimize-autoloader

shell:
	- docker exec -it ${CONTAINER} bash

reload-nginx:
	- docker exec -it server nginx -s reload
