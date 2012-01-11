#!/bin/bash



CLASSES_PATH=db/build/classes
LIBRARY_PATH=library

# rm -f $LIBRARY_PATH/Oops/Model/*
rm -f $LIBRARY_PATH/Oops/Db/Propel/*

# cp $CLASSES_PATH/prestashop/* $LIBRARY_PATH/Oops/Model
cp $CLASSES_PATH/prestashop/om/* $LIBRARY_PATH/Oops/Db/Propel
cp $CLASSES_PATH/prestashop/map/* $LIBRARY_PATH/Oops/Db

find $LIBRARY_PATH/Oops/Db/Propel | sed 's/\(.*\)Oops_Db_Propel_\(.*\)\(.*\)/mv & \1\2/g' | sh
find $LIBRARY_PATH/Oops/Db/ -name "Oops_Db_*TableMap.php" | sed 's/\(.*\)Oops_Db_\(.*\)\(.*\)/mv & \1\2/g' | sh
# 
