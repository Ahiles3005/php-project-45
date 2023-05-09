install:
	composer install
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
dump-update:
	composer dump-autoload
brain-games:
	./bin/brain-games
brain-even:
	./bin/brain-even
brain-calc:
	./bin/brain-calc

