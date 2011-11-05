#!/bin/bash



CLASSES_PATH=db/build/classes
LIBRARY_PATH=library

# rm -f $LIBRARY_PATH/Oops/Model/*
rm -f $LIBRARY_PATH/Oops/Model/Base/*

# cp $CLASSES_PATH/prestashop/* $LIBRARY_PATH/Oops/Model
cp $CLASSES_PATH/prestashop/om/* $LIBRARY_PATH/Oops/Model/Base
cp $CLASSES_PATH/prestashop/map/* $LIBRARY_PATH/Oops/Model

find $LIBRARY_PATH/Oops/Model/Base | sed 's/\(.*\)Oops_Model_Base_\(.*\)\(.*\)/mv & \1\2/g' | sh
# find $LIBRARY_PATH/Oops/Model/ -maxdepth 1 | sed 's/\(.*\)Oops_Model_\(.*\)\(.*\)/mv & \1\2/g' | sh
# 
