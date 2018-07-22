# -*- coding: utf-8 -*-
"""Программа симуляция подбрасывания монетки с заданным кол-ом подбрасыванием"""
import random

tail = 0
sign = 0

answer = int(raw_input("Сколько сделать подбрасываний? "))

while answer != 0:
    a = random.randint(0, 1)
    if a == 0:
        tail += 1
    else:
        sign += 1

    answer -= 1

print ("Решка выпала %d раз.\nОрёл выпал %d раз." % (sign, tail))

