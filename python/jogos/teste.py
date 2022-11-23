total = 0
palavra = "python rocks!"
acertou = False

while(not acertou):
  acertou = (total == len(palavra))
  total = total + 1

print(total - 1)
