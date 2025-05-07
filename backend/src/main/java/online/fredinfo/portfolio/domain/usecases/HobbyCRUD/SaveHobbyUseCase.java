package online.fredinfo.portfolio.domain.usecases.HobbyCRUD;

import online.fredinfo.portfolio.domain.entities.Hobby;
import online.fredinfo.portfolio.domain.entities.HobbyRepository;

public class SaveHobbyUseCase {
    private final HobbyRepository hobbyRepository;

    public SaveHobbyUseCase(HobbyRepository hobbyRepository) {
        this.hobbyRepository = hobbyRepository;
    }

    public HobbyRepository getHobbyRepository() {
        return hobbyRepository;
    }

    public Hobby execute(Hobby hobby) {
        return this.hobbyRepository.save(hobby);
    }
}
