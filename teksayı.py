listemiz = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9] 
i = (max(listemiz))
  
while(i < len(listemiz)): 
      
    # tek sayı kontrolü 
    if listemiz[i] % 2 != 0: 
        print (listemiz[i], end = " ") 
    i += 1