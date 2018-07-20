"""Программа предназначего для перевода чисел из бинарных в десятичные и обратно
    20/07/2018 добавлена проверка пользовательского ввода"""

res = ""
b = None
d = 0
g = 0 # for calc index of arr
e = 0 # transient var for bin->dec
arr_d = []
arr_b = []
user_input = ""
user_choice = 0

BI_CHAR = "йцукенгшщзхъфывапролджэячсмитьбюЙЦУКЕНГШЩЗХЪФЫВАПРОЛДЖЭЯЧСМИТЬБЮ23456789qwertyuiop[]asdfghjkl;'\"\\zxcvbnm,." \
          "/QWERTYUIOASDFGHJKLZXCVBNM`~!@#$%^&*()-=_+|<>"

DE_CHAR = "йцукенгшщзхъфывапролджэячсмитьбюЙЦУКЕНГШЩЗХЪФЫВАПРОЛДЖЭЯЧСМИТЬБЮqwertyuiop[]asdfghjkl;'\"\\zxcvbnm,./QWE" \
          "RTYUIOASDFGHJKLZXCVBNM`~!@#$%^&*()-=_+|<>"

print("Привет! Я перевожу десятичные в двоичные и наоборот.\n")

while user_choice not in (1, 2):
    user_choice = int(input("Вы хотите двоичное перевести в десятичнок (1) или десятичное в двоичное (2): "))

if user_choice == 1:

    while user_input in BI_CHAR:
        user_input = input("Введите двоичное, чтобы я перевёл его в десятичное: ")

        for i in user_input:
            if i in BI_CHAR:
                print("Ошибка ввода. Введите числа от 0 до 1.")
                user_input = ""
                break

    for i in user_input:
        arr_b.append(int(i))

    lenArr = len(arr_b)

    for i in arr_b:
        d = i * 2**(lenArr - g)
        e += d
        g += 1
        d = 0
    e /= 2
    print(e)

elif user_choice == 2:

    while user_input in DE_CHAR:
        user_input = input("Введите десятичное, чтобы я перевёл его в двоичное: ")

        for i in user_input:
            if i in DE_CHAR:
                print("Ошибка ввода. Введите числа от 0 до 9.")
                user_input = ""
                break

    user_input = int(user_input)
    while b != 0:
        a = user_input % 2
        b = user_input // 2
        user_input = a
        user_input = b
        res += str(a)

    for i in res:
        arr_d.append(str(i))
    arr_d.reverse()
    res = ""
    for i in arr_d:
        res += i

    print(res)







    

