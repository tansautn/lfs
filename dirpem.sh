#!/bin/bash
RW=(./storage ./bootstrap/cache);

for k in $RW; do
chmod 777 -R $k ;
done
