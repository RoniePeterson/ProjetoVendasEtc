# conta.py
class Conta:
    def __init__(self, numero, titular, saldo, limite):
        self.__numero = numero
        self.__titular = titular
        self.__saldo = saldo
        self.__limite = limite

    def extrato(self):
        print("O saldo é {}, do titular: {}".format(self.__saldo, self.__titular))

    def deposita(self, valor):
        self.__saldo += valor

    def saca(self, valor):
        self.__saldo -= valor
    
    def transfere(self, destino, valor):
        self.saca(valor)
        destino.deposita(valor)
    
    def get_saldo(self):
        return self.__saldo
      
    def get_titular(self):
        return self.__titular
    
    def get_limite(self):
        return self.__limite
      
    def set_limite(self, valor):
      self.__limite =valor
