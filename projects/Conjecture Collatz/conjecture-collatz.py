# -*- coding: utf-8 -*-

i = 0

answer = int(raw_input("Enter number from what We start: "))

while True:

    a = answer % 2

    if a == 0:
        answer /= 2
        print answer

    elif a == 1:
        answer = (answer * 3) + 1
        print answer
    i += 1

    if answer == 1:
        break

print ("Steps: %d" % i)
