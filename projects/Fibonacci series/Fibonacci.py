"""Program created for computing of some member Fibonacci series"""
print("Hello! Welcome at program that can show you Fibonacci numbers")

ans = 0
while ans not in range(1, 2):
    try:
        ans = int(input("Do you want several members in row or some specific:\n"
                "1. Members in row\n"
                "2. Some specific member\n"))
    except:
        print("You must input number 1 or 2\n")


def mem_computer(param, mode):
    a = b = 1
    i = 0
    arr = []
    if mode == 1:
        while i != param:
            i += 1
            c = a + b
            b = a
            a = c
            print(c)

    elif mode == 2:
        while True:
            i += 1
            c = a + b
            b = a
            a = c
            arr.append(c)
            if i == param:
                break

        print(arr[param-1])

if ans == 1:
    ans = int(input("How many members do you want see: "))
    mem_computer(ans, 1)

elif ans == 2:
    ans = int(input("What member do you want to see: "))
    mem_computer(ans, 2)