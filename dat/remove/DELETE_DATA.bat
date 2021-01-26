@echo off
    copy "data" "data.old"
    del /P data
    break>"data"