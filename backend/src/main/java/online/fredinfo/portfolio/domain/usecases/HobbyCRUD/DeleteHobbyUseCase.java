package online.fredinfo.portfolio.domain.usecases.HobbyCRUD;

import online.fredinfo.portfolio.domain.entities.Hobby;
import online.fredinfo.portfolio.domain.entities.HobbyRepository;

import java.util.UUID;

public class DeleteHobbyUseCase {
    private final HobbyRepository hobbyRepository;

    public DeleteHobbyUseCase(HobbyRepository hobbyRepository) {
        this.hobbyRepository = hobbyRepository;
    }

    public HobbyRepository getHobbyRepository() {
        return hobbyRepository;
    }

    public void execute(Hobby hobby) {
        hobbyRepository.delete(hobby);
    }

    public void execute(UUID id) {
        hobbyRepository.deleteById(id);
    }
}
