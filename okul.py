class Okul1():
    def _init_(self,isim,tur,bolumleri):
        print(isim)
        self.isim= isim
        self.tur= tur
        self.bolumleri
    def bilgileriGoster(self):
        print("*-"*20)
        print("Okulun ismi: ",self.isim)
        print("Okulun türü: ",self.tur)
        print("Okulun bölümleri: ",self.bolumleri)
        print("*-"*20)  


class Sınıf1():
    def __init__(self,isim,tur,bolum,ogrencisayisi): 
        print("Yeni sınıf oluşturuldu",isim)
        self.isim = isim
        self.tur = tur
        self.bolum = bolum
        self.ogrencisayisi = ogrencisayisi
    def bilgileriGoster(self):
        print("*-"*20)
        print("Sınıfın ismi: ",self.isim)
        print("Sınıfın türü: ",self.tur)
        print("Sınıfın bölümü: ",self.bolum)
        print("Sınıfın öğrenci sayısı: ",self.ogrencisayisi)
        print("*-"*20)


class Personel1():
    def __init__(self,isim,maas,yetenek,rutbe): 
        print("Yeni personel oluşturuldu",isim)
        self.isim = isim
        self.yetenek = yetenek
        self.maas = maas
        self.rutbe = rutbe
    def bilgileriGoster(self):
        print("*-"*20)
        print("Personelin ismi: ",self.isim)
        print("Personelin yetenekleri: ",self.yetenek)
        print("Personelin maaşı: ",self.maas)
        print("Personelin konumu: ",self.rutbe)
        print("*-"*20)

class Mudur1(Personel1):
    pass
class Mudur_yardimcisi1(Personel1):
    pass
class Ogretmen1(Personel1):
    pass
class Hizmetli1(Personel1):
    pass


class Bolumler1():
    def __init__(self,isim,kacders,kacogrenci,kacogretmen): 
        print("Yeni bölüm oluşturuldu",isim)
        self.isim = isim
        self.kacders = kacders
        self.kacogrenci = kacogrenci
        self.kacogretmen = kacogretmen
    def bilgileriGoster(self):
        print("*-"*20)
        print("Bölümün ismi: ",self.isim)
        print("Bölümde kaç ders var: ",self.kacders)
        print("Bölümde kaç öğrenci var: ",self.kacogrenci)
        print("Bölümde kaç öğretmen var: ",self.kacogretmen)
        print("*-"*20)

class Esitagirlik1(Bolumler1):
    pass
class Sayisal1(Bolumler1):
    pass
class Sozel1(Bolumler1):
    pass


class Dersler1():
    def __init__(self,isim,hangibolum,kacincisinf,kacogrenci,gecmenotu): 
        print("Yeni ders oluşturuldu",isim)
        self.isim = isim
        self.hangibolum = hangibolum
        self.kacincisinif = kacincisinf
        self.kacogrenci = kacogrenci
        self.gecmenotu = gecmenotu
    def bilgileriGoster(self):
        print("*-"*20)
        print("Dersin ismi: ",self.isim)
        print("Dersi alan bölümler: ",self.hangibolum)
        print("Dersi alan sınıflar: ",self.kacincisinif)
        print("Dersi alan öğrenci sayısı: ",self.kacogrenci)
        print("Dersin geçme notu: ",self.gecmenotu)
        print("*-"*20)

class Turkdili1(Dersler1):
    pass
class Matematik1(Dersler1):
    pass
class Geometri1(Dersler1):
    pass
class Tarih1(Dersler1):
    pass
class Cografya1(Dersler1):
    pass
class Fizik1(Dersler1):
    pass
class Biyoloji1(Dersler1):
    pass
class Kimya1(Dersler1):
    pass
class Yabancidil1(Dersler1):
    pass





class Okul2():
    def _init_(self,isim,tur,bolumleri):
        print(isim)
        self.isim= isim
        self.tur= tur
        self.bolumleri
    def bilgileriGoster(self):
        print("*-"*20)
        print("Okulun ismi: ",self.isim)
        print("Okulun türü: ",self.tur)
        print("Okulun bölümleri: ",self.bolumleri)
        print("*-"*20)  


class Sınıf2():
    def __init__(self,isim,tur,bolum,ogrencisayisi): 
        print("Yeni sınıf oluşturuldu",isim)
        self.isim = isim
        self.tur = tur
        self.bolum = bolum
        self.ogrencisayisi = ogrencisayisi
    def bilgileriGoster(self):
        print("*-"*20)
        print("Sınıfın ismi: ",self.isim)
        print("Sınıfın türü: ",self.tur)
        print("Sınıfın bölümü: ",self.bolum)
        print("Sınıfın öğrenci sayısı: ",self.ogrencisayisi)
        print("*-"*20)


class Personel2():
    def __init__(self,isim,maas,yetenek,rutbe): 
        print("Yeni personel oluşturuldu",isim)
        self.isim = isim
        self.yetenek = yetenek
        self.maas = maas
        self.rutbe = rutbe
    def bilgileriGoster(self):
        print("*-"*20)
        print("Personelin ismi: ",self.isim)
        print("Personelin yetenekleri: ",self.yetenek)
        print("Personelin maaşı: ",self.maas)
        print("Personelin konumu: ",self.rutbe)
        print("*-"*20)

class Mudur2(Personel2):
    pass
class Mudur_yardimcisi2(Personel2):
    pass
class Ogretmen2(Personel2):
    pass
class Hizmetli2(Personel2):
    pass


class Bolumler2():
    def __init__(self,isim,kacders,kacogrenci,kacogretmen): 
        print("Yeni bölüm oluşturuldu",isim)
        self.isim = isim
        self.kacders = kacders
        self.kacogrenci = kacogrenci
        self.kacogretmen = kacogretmen
    def bilgileriGoster(self):
        print("*-"*20)
        print("Bölümün ismi: ",self.isim)
        print("Bölümde kaç ders var: ",self.kacders)
        print("Bölümde kaç öğrenci var: ",self.kacogrenci)
        print("Bölümde kaç öğretmen var: ",self.kacogretmen)
        print("*-"*20)

class Resim2(Bolumler2):
    pass
class Müzik2(Bolumler2):
    pass


class Dersler2():
    def __init__(self,isim,hangibolum,kacincisinf,kacogrenci,gecmenotu): 
        print("Yeni ders oluşturuldu",isim)
        self.isim = isim
        self.hangibolum = hangibolum
        self.kacincisinif = kacincisinf
        self.kacogrenci = kacogrenci
        self.gecmenotu = gecmenotu
    def bilgileriGoster(self):
        print("*-"*20)
        print("Dersin ismi: ",self.isim)
        print("Dersi alan bölümler: ",self.hangibolum)
        print("Dersi alan sınıflar: ",self.kacincisinif)
        print("Dersi alan öğrenci sayısı: ",self.kacogrenci)
        print("Dersin geçme notu: ",self.gecmenotu)
        print("*-"*20)

class Turkdili2(Dersler2):
    pass
class Matematik2(Dersler2):
    pass
class Sosyal2(Dersler2):
    pass
class Fen2(Dersler2):
    pass
class Grafiktasarim2(Dersler2):
    pass
class Fotograf2(Dersler2):
    pass
class resimcalisması2(Dersler2):
    pass
class Plastiksanatlar2(Dersler2):
    pass
class Yabancidil2(Dersler2):
    pass
class Muzikaletleri2(Dersler2):
    pass
class Koro2(Dersler2):
    pass
class Muzikselisitme2(Dersler2):
    pass





class Okul3():
    def _init_(self,isim,tur,bolumleri):
        print(isim)
        self.isim= isim
        self.tur= tur
        self.bolumleri
    def bilgileriGoster(self):
        print("*-"*20)
        print("Okulun ismi: ",self.isim)
        print("Okulun türü: ",self.tur)
        print("Okulun bölümleri: ",self.bolumleri)
        print("*-"*20)  


class Sınıf3():
    def __init__(self,isim,tur,bolum,ogrencisayisi): 
        print("Yeni sınıf oluşturuldu",isim)
        self.isim = isim
        self.tur = tur
        self.bolum = bolum
        self.ogrencisayisi = ogrencisayisi
    def bilgileriGoster(self):
        print("*-"*20)
        print("Sınıfın ismi: ",self.isim)
        print("Sınıfın türü: ",self.tur)
        print("Sınıfın bölümü: ",self.bolum)
        print("Sınıfın öğrenci sayısı: ",self.ogrencisayisi)
        print("*-"*20)


class Personel3():
    def __init__(self,isim,maas,yetenek,rutbe): 
        print("Yeni personel oluşturuldu",isim)
        self.isim = isim
        self.yetenek = yetenek
        self.maas = maas
        self.rutbe = rutbe
    def bilgileriGoster(self):
        print("*-"*20)
        print("Personelin ismi: ",self.isim)
        print("Personelin yetenekleri: ",self.yetenek)
        print("Personelin maaşı: ",self.maas)
        print("Personelin konumu: ",self.rutbe)
        print("*-"*20)

class Mudur3(Personel3):
    pass
class Mudur_yardimcisi3(Personel3):
    pass
class Ogretmen3(Personel3):
    pass
class Hizmetli3(Personel3):
    pass


class Bolumler3():
    def __init__(self,isim,kacders,kacogrenci,kacogretmen): 
        print("Yeni bölüm oluşturuldu",isim)
        self.isim = isim
        self.kacders = kacders
        self.kacogrenci = kacogrenci
        self.kacogretmen = kacogretmen
    def bilgileriGoster(self):
        print("*-"*20)
        print("Bölümün ismi: ",self.isim)
        print("Bölümde kaç ders var: ",self.kacders)
        print("Bölümde kaç öğrenci var: ",self.kacogrenci)
        print("Bölümde kaç öğretmen var: ",self.kacogretmen)
        print("*-"*20)

class Bilisimteknolojileri3(Bolumler3):
    pass
class Giyimuretimteknolojileri3(Bolumler3):
    pass
class Grafikvefotograf3(Bolumler3):
    pass


class Dersler3():
    def __init__(self,isim,hangibolum,kacincisinf,kacogrenci,gecmenotu): 
        print("Yeni ders oluşturuldu",isim)
        self.isim = isim
        self.hangibolum = hangibolum
        self.kacincisinif = kacincisinf
        self.kacogrenci = kacogrenci
        self.gecmenotu = gecmenotu
    def bilgileriGoster(self):
        print("*-"*20)
        print("Dersin ismi: ",self.isim)
        print("Dersi alan bölümler: ",self.hangibolum)
        print("Dersi alan sınıflar: ",self.kacincisinif)
        print("Dersi alan öğrenci sayısı: ",self.kacogrenci)
        print("Dersin geçme notu: ",self.gecmenotu)
        print("*-"*20)

class Turkdili3(Dersler3):
    pass
class Matematik3(Dersler3):
    pass
class Sosyal3(Dersler3):
    pass
class Fen3(Dersler3):
    pass
class Agisletmenligi3(Dersler3):
    pass
class Bilgisayarteknikservisi3(Dersler3):
    pass
class Veritabaniprogramciligi3(Dersler3):
    pass
class Webprogramciligi3(Dersler3):
    pass
class Yabancidil3(Dersler3):
    pass
class Modelistlik3(Dersler3):
    pass
class Kalipcikarma3(Dersler3):
    pass
class Kesim3(Dersler3):
    pass
class Dikim3(Dersler3):
    pass
class Fotograf3(Dersler3):
    pass
class Tasarımprogramlari3(Dersler3):
    pass
class Basımteknikleri3(Dersler3):
    pass


Aylin=Mudur1("aylin",3800,"yönetim","müdür")
Mehmet=Ogretmen2("mehmet",2750,"türkdili","öğretmen")
Leyla=Ogretmen3("leyla",2800,"fotoğraf","öğretmen")
Aylin.bilgileriGoster()
Mehmet.bilgileriGoster()
Leyla.bilgileriGoster()