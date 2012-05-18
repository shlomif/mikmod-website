RSYNC_EXTRA_OPTS = 

all:

upload:
	rsync -a -v --progress --inplace --exclude='**~' --exclude='**/.*.swp' $(RSYNC_EXTRA_OPTS) dest/ hostgator:domains/mikmod/public_html
