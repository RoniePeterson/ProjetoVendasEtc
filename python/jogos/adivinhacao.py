# adivinhacao.py
import random
def jogar():
    print("***************************************************")
    print("*********Bem vindo ao jogo de Adivinhação!*********")
    print("***************************************************")

    numero_secreto = random.randrange(1,101)
    total_de_tentativas = 0
    rodada = 1
    pontos = 1000

    print("(1) Fácil (2) Médio (3) Difícil")
    nivel = int(input("Defina o nível do jogo: "))

    if(nivel == 1):
        total_de_tentativas = 8
    elif(nivel ==2):
        total_de_tentativas = 4
    else:
        total_de_tentativas = 2

    for rodada in range(1, total_de_tentativas + 1):
        print("Tentativa {} de {}".format(rodada, total_de_tentativas))

        chute_str = input("Digite um número entre 1 e 100: ")
        print("Você digitou ", chute_str)
        chute = int(chute_str)

        if(chute < 1 or chute > 100):
            print("Você deve digitar um número entre 1 e 100!")

        acertou = chute == numero_secreto
        maior = chute > numero_secreto
        menor = chute < numero_secreto

        pontos_perdidos = abs(numero_secreto - chute)
        pontos = pontos - pontos_perdidos

        if(acertou):
            print("Parabéns! Você acertou e fez {} pontos".format(pontos))
            break
        else:
            if(maior):
                print("O seu chute foi maior que o número secreto!")
                if(rodada == total_de_tentativas):
                    print("O número secreto era {}. E você fez {} pontos".format(numero_secreto, pontos))
            elif(menor):
                print("O seu chute foi menor do que o número secreto!")
                if(rodada == total_de_tentativas):
                    print("O número secreto era {1}. E você fez {0} pontos".format(pontos, numero_secreto))

        rodada = rodada + 1

    print("Fim de jogo!")

if(__name__ == '__main__'):
    jogar()