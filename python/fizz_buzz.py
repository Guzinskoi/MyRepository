num = int(input("Введите положительное число: "))
if 0 < num <= 1000: 
    if num % 3 == 0 and num % 5 == 0:
        print("Fizz Buzz")
    elif num % 3 == 0 :
        print("Fizz")
    elif num % 5 == 0:
        print("Buzz")
    else:
        print(str(num))