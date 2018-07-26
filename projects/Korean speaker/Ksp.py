from tkinter import *

class Application(Frame):
    def __init__(self, master):
        super(Application, self).__init__(master)
        self.grid()
        self.create_widgets()

    def create_widgets(self):
        """Создаёт кнопку, текстовое поле и текстовую область"""

        self.inst_lbl = Label(self, text = "Введи слово, чтобы узнать, как бы его сказал кореец")
        self.inst_lbl.grid(row = 0, column = 0, columnspan = 2, sticky = W)

        self.pw_lbl = Label (self, text="Вводи сюда")
        self.pw_lbl.grid(row=1, column=0, sticky=W)

        self.pw_ent = Entry(self)
        self.pw_ent.grid(row=1, column = 1, sticky=W)

        self.submit_bttn = Button (self, text="жми!", command=self.reveal)
        self.submit_bttn.grid(row=2, column=1, sticky=W)

        self.answer_text = Text(self, width=35, height=5, wrap=WORD)
        self.answer_text.grid(row=3, column=0, columnspan=2, sticky=W)

    def reveal(self):
        contents = self.pw_ent.get()
        NOT_USED = "фвзрл"
        changed = ""

        for i in contents:

            if i.lower() == "ф":
                i = i.replace(i, "п")

            elif i.lower() == "в":
                i = i.replace(i, "б")

            elif i.lower() == "з":
                i = i.replace(i, "чж")

            elif i.lower() == "р":
                i = i.replace(i, "")

            elif i.lower() == "л":
                i = i.replace(i, "дь")

            changed += i

        self.answer_text.delete(0.0, END)
        self.answer_text.insert(0.0, changed)

root = Tk()
root.title("Симулятор корейца")
app = Application(root)
root.mainloop()



















# # Не произносится Ф В З Р Л

# NOT_USED = "фвзрл"
# changed = ""
# ask = input("Ввади любая текста: ").lower()
#
# for i in ask:
#
#     if i == "ф":
#         i = i.replace(i, "п")
#
#     elif i == "в":
#         i = i.replace(i, "б")
#
#     elif i == "з":
#         i = i.replace(i, "чж")
#
#     elif i == "р":
#         i = i.replace(i, "")
#
#     elif i == "л":
#         i = i.replace(i, "дь")
#
#     changed += i
#
# print(changed)
