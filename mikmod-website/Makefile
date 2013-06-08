RSYNC_EXTRA_OPTS =

all:
	perl process.pl

upload:
	rsync -a -v --progress --inplace --exclude='**~' --exclude='**/.*.swp' $(RSYNC_EXTRA_OPTS) dest/ hostgator:domains/mikmod/public_html

test: all
	runprove Tests/*.t
