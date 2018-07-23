"""Converter of mass, temperature and currency"""
"""Without DRY, unfortunataley"""

# Block of constants

USD_EUR = 0.85
USD_GBP = 0.7613
USD_RUB = 63

EUR_USD = 1.1704
EUR_GBP = 0.89
EUR_RUB = 73.93

GBP_USD = 1.3134
GBP_EUR = 1.1207
GBP_RUB = 82.95

RUB_USD = 0.0158
RUB_EUR = 0.0135
RUB_GBP = 0.0120


def check(param):
    """Checking input of usvers"""
    try:
        param = float(param)

    except ValueError:
        print("Incorrect input \"%s\". Must be number." % param)


answer = input("This program convert for you all interesting values.\n"
               "\t1) Mass\n"
               "\t2) Temperature\n"
               "\t3) Currency\n\n"
               "\tYour choose(input number): ")

check(answer)

if answer == "1":
    answer = ""
    while answer not in ("1", "2"):
        answer = input("You want convert:\n"
                   "1) Kilograms\n "
                   "2) Pounds\n"
                   "Your choose: ")
    check(answer)

    if answer == "1":
        answer = input("Enter value to convert: ")
        check(answer)
        answer = float(answer)
        a = answer
        a *= 2.20462262

        print("%f kilo is %.2f pounds" % (answer, a))

    elif answer == "2":
        answer = input("Enter value to convert: ")
        check(answer)
        answer = float(answer)
        a = answer
        a /= 2.20462262

        print("%.2f pounds is %.2f kilo" % (answer, a))

elif answer == "2":
    answer = ""
    while answer not in ("1", "2", "3"):
        answer = input("You want convert:\n"
                   "1) Celsium\n"
                   "2) Farenheit\n"
                   "3) Kelvin\n"
                   "Your choose: ")
    check(answer)

    # Celsium case
    if answer == "1":
        answer = input("Enter value to convert: ")
        check(answer)
        answer = float(answer)
        a = b = answer
        # from Celsium to Farenheit
        a = (a * (9/5)) + 32
        # from Celsium to Kelvin
        b = b + 273.15

        print("%.2f Celsium is %.2f in Farenheit and %.2f in Kelvin" % (answer, a, b))

    # Farenheit case
    elif answer == "2":
        answer = input("Enter value to convert: ")
        check(answer)
        answer = float(answer)
        a = b = answer
        # from Farenheit to Celsium
        a = (a - 32) * (5 / 9)
        # from Farenheit to Kelvin
        b = ((b - 32) / 1.8) + 273

        print("%.2f Farenheit is %.2f in Celsium and %.2f in Kelvin" % (answer, a, b))

    # Kelvin case
    elif answer == "3":
        answer = input("Enter value to convert: ")
        check(answer)
        answer = float(answer)
        a = b = answer
        # from Kelvin to Farenheit
        a = ((a - 273.15) * 1.8) + 32
        # from Kelvin to Celsium
        b = b - 273.15

        print("%.2f Kelvin is %.2f in Farenheit and %.2f in Celsium" % (answer, a, b))


elif answer == "3":
    answer = ""
    while answer not in ("1", "2", "3", "4"):
        answer = input("You want convert:\n"
                   "1) USD\n"
                   "2) EUR\n"
                   "3) GBP\n"
                   "4) RUB\n"
                   "Your choose: ")

    if answer == "1":
        answer = input("Enter value to convert: ")
        check(answer)
        answer = float(answer)
        a = b = c = answer
        # EUR
        a = a * USD_EUR
        # GBP
        b = b * USD_GBP
        # RUB
        c = c * USD_RUB

        # euro: Alt+0128; gbp: Alt+0163
        print("%.2f dollars is %.2f€ (euro), %.2f£ (pounds) and %.2f rub." % (answer, a, b, c))

    if answer == "2":
        answer = input("Enter value to convert: ")
        check(answer)
        answer = float(answer)
        a = b = c = answer
        # USD
        a = a * EUR_USD
        # GBP
        b = b * EUR_GBP
        # RUB
        c = c * EUR_RUB

        # euro: Alt+0128; gbp: Alt+0163
        print("%.2f euros is %.2f$ (dollars), %.2f£ (pounds) and %.2f rub." % (answer, a, b, c))

    if answer == "3":
        answer = input("Enter value to convert: ")
        check(answer)
        answer = float(answer)
        a = b = c = answer
        # EUR
        a = a * GBP_EUR
        # GBP
        b = b * GBP_USD
        # RUB
        c = c * GBP_RUB

        # euro: Alt+0128; gbp: Alt+0163
        print("%.2f pounds is %.2f€ (euro), %.2f$ (dollars) and %.2f rub." % (answer, a, b, c))

    if answer == "4":
        answer = input("Enter value to convert: ")
        check(answer)
        answer = float(answer)
        a = b = c = answer
        # EUR
        a = a * RUB_EUR
        # GBP
        b = b * RUB_USD
        # RUB
        c = c * RUB_GBP

        # euro: Alt+0128; gbp: Alt+0163
        print("%.2f rub is %.2f€ (euro), %.2f$ (dollars) and %.2f£ pounds." % (answer, a, b, c))
