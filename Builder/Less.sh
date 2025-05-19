#!/usr/bin/env bash

echo "Compiling LESS...";

printf "\tSources/Style"; lessc ../Sources/Style.less ../Sources/Style.css; printf "\n";
printf "\tSources/API/Areas/Show/Style"; lessc ../Sources/API/Areas/Show/Style.less ../Sources/API/Areas/Show/Style.css; printf "\n";
printf "\tDone compiling LESS to CSS\n";
